<?php
/**
 * This is the template for generating the model class of a specified table.
 */

/* @var $this yii\web\View */
/* @var $generator phpshko\magicscopes\gii\model\Generator */
/* @var $tableName string full table name */
/* @var $className string class name */
/* @var $tableSchema yii\db\TableSchema */
/* @var $labels string[] list of attribute labels (name => label) */
/* @var $rules string[] list of validation rules */
/* @var $relations array list of relations (name => relation declaration) */

echo "<?php\n";
?>

namespace <?= $generator->ns ?>;

<?php if ($generator->isCreateQuery()): ?>
/**
 * Magic Scopes
 *
<?php
    foreach ($tableSchema->columns as $column) {
        foreach ($generator->getMethodsDocs($column->name) as $method) {
            echo ' * @method ' . $className . 'Query|' . $generator->modelClass . ' ' . $method . "\n";
        }
        echo " *\n";
    }
?>
 */
<?php endif; ?>
class <?= $className ?>Query extends \yii\db\ActiveQuery
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => \phpshko\magicscopes\MagicScopesBehavior::className()
            ]
        ];
    }
}