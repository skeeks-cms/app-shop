<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */

use yii\base\InvalidConfigException;
use yii\db\Schema;
use yii\rbac\DbManager;

/**
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class m171121_102106_db_init extends \yii\db\Migration
{
    public function safeUp()
    {
        if ($this->db->driverName === 'mysql') {

            $version = 'db__2024-03-12_17-05-00.sql';

            $filePath = dirname(__DIR__) . "/db/{$version}";

            $file = fopen($filePath, "r");
            if (!$file) {
                throw new \Exception("Unable to open file: '{$filePath}'");
            }
            $sql = fread($file, filesize($filePath));
            fclose($file);

            $this->compact = true;
            $this->execute($sql);

        } else if ($this->db->driverName === 'pgsql') {

            $version = 'db__2017-11-21_11-49-03.sql';

            $filePath = dirname(__DIR__) . "/pgsql/{$version}";

            $file = fopen($filePath, "r");
            if (!$file) {
                throw new \Exception("Unable to open file: '{$filePath}'");
            }
            $sql = fread($file, filesize($filePath));
            fclose($file);

            /*$this->db->pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, true);
            $this->compact = true;
            $this->execute($sql);
            */
            $this->compact = true;
            $pdo = $this->db->masterPdo;
            $pdo->exec($sql);

        } else {
            echo "Error for driver {$this->db->driverName} cannot be reverted.\n";
            return false;
        }


    }

    public function down()
    {
        echo "m171121_102106_db_init cannot be reverted.\n";
        return false;
    }
}
