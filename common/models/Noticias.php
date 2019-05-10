<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "noticias".
 *
 * @property int $id
 * @property resource $imagem
 * @property string $titulo
 * @property string $texto
 * @property string $data
 */
class Noticias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'noticias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imagem', 'titulo', 'texto', 'data'], 'required'],
            [['imagem', 'texto'], 'string'],
            [['titulo'], 'string', 'max' => 150],
            [['data'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'imagem' => 'Imagem',
            'titulo' => 'Título',
            'texto' => 'Texto',
            'data' => 'Data (dd/mm/yyyy)',
        ];
    }
}
