<?php

namespace app\gii\crud;

use yii\gii\generators\crud\Generator as YiiGenerator;

/**
* Yii CRUD Generator with modification
*/
class Generator extends YiiGenerator
{
    /**
     * Generates code for active field
     * @param string $attribute
     * @return string
     */
    public function generateActiveField($attribute)
    {
        $tableSchema = $this->getTableSchema();
        if ($tableSchema === false || !isset($tableSchema->columns[$attribute])) {
            if (preg_match('/^(password|pass|passwd|passcode)$/i', $attribute)) {
                return "\$form->field(\$model, '$attribute')->passwordInput()";
            } else {
                return "\$form->field(\$model, '$attribute')";
            }
        }
        $column = $tableSchema->columns[$attribute];
        if ($column->phpType === 'boolean') {
            return "\$form->field(\$model, '$attribute')->checkbox()";
        } elseif ($column->type === 'text') {
            return "\$form->field(\$model, '$attribute')->textarea(['rows' => 6])";
        } else {
            if (preg_match('/^(password|pass|passwd|passcode)$/i', $column->name)) {
                $input = 'passwordInput';
            } elseif ($this->getIsFileType($column->name)) {
                $input = 'fileInput';
            } else {
                $input = 'textInput';
            }
            if (is_array($column->enumValues) && count($column->enumValues) > 0) {
                $dropDownOptions = [];
                foreach ($column->enumValues as $enumValue) {
                    $dropDownOptions[$enumValue] = Inflector::humanize($enumValue);
                }
                return "\$form->field(\$model, '$attribute')->dropDownList("
                    . preg_replace("/\n\s*/", ' ', VarDumper::export($dropDownOptions)).", ['prompt' => ''])";
            } elseif ($input === 'fileInput' || $column->phpType !== 'string' || $column->size === null) {
                return "\$form->field(\$model, '$attribute')->$input()";
            } else {
                return "\$form->field(\$model, '$attribute')->$input(['maxlength' => true])";
            }
        }
    }

    /**
     * Check if the attribute will be used as file / binary file name placeholder
     * based on the field name
     * @return boolean
     */
    public function getIsFileType($attribute)
    {
        return preg_match('/^(berkas_|gambar_)/i', $attribute);
    }

    public function getHasFileType()
    {
        foreach ($this->getTableSchema()->columns as $column) {
            if ($this->getIsFileType($column->name)) {
                return true;
            }
        }

        return false;
    }

    public function getFilteTypeAttributes()
    {
        $attribute = [];

        foreach ($this->getTableSchema()->columns as $column) {
            if ($this->getIsFileType($column->name)) {
                $attribute[] = $column->name;
            }
        }

        return $attribute;
    }
}
