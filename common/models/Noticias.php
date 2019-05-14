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
 * @property int $dia
 * @property string $mes
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
            [['imagem', 'titulo', 'texto', 'dia', 'mes'], 'required'],
            [['imagem', 'texto', 'mes'], 'string'],
            [['dia'], 'integer'],
            [['titulo'], 'string', 'max' => 150],
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
            'titulo' => 'Titulo',
            'texto' => 'Texto',
            'dia' => 'Dia',
            'mes' => 'Mes',
        ];
    }

}
