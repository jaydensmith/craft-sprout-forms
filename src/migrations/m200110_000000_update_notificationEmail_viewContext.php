<?php

namespace barrelstrength\sproutforms\migrations;

use barrelstrength\sproutseo\elements\Redirect;
use craft\db\Migration;

class m200110_000000_update_notificationEmail_viewContext extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp(): bool
    {
        $this->update('{{%sproutemail_notificationemails}}', [
            'viewContext' => 'sprout-forms'
        ], [
            'eventId' => 'barrelstrength\sproutforms\integrations\sproutemail\events\notificationevents\SaveEntryEvent'
        ], [], false);

        return true;
    }

    /**
     * @inheritdoc
     */
    public function safeDown(): bool
    {
        echo "m200110_000000_update_notificationEmail_viewContext cannot be reverted.\n";
        return false;
    }
}
