* `composer refresh`: Refresh autoload files for new classes and namespaces
* `vendor\bin\doctrine.bat orm:schema-tool:create`
* `vendor\bin\doctrine.bat orm:schema-tool:update --force --dump-sql` : Sync the schema's
* `php src\create_group.php Test` : Create new group named `Test`
* `php src\list_groups.php` : List all groups in DB

Receiving the following error:
> Invalid mapping file 'Entity.Group.dcm.yml' for class 'Entity\Group'.
