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
/* @var $methods array list of methods */

echo "<?php\n";
?>

namespace <?= $generator->ns ?>;

<?php if ($generator->generateMagicScopes && $generator->isSaveToAutoComplete()): ?>
/**
 * Magic Scopes
 *
<?php
    foreach ($methods as $method) {
        echo ' * @method MagicAutoComplete ' . $method . "\n";
    }
?>
 */
<?php endif; ?>
class MagicAutoComplete
{

}