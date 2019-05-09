<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticias".
 *
 * @property int $id
 * @property string $titulo
 * @property resource $imagem
 * @property string $corpo
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
            [['titulo', 'imagem', 'corpo', 'data'], 'required'],
            [['imagem', 'corpo'], 'string'],
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
            'titulo' => 'Titulo',
            'imagem' => 'Imagem',
            'corpo' => 'Corpo',
            'data' => 'Data',
        ];
    }
}
