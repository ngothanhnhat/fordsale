<?php namespace Anomaly\Streams\Platform\Model\Forms;

use Anomaly\Streams\Platform\Entry\EntryModel;

class FormsFormsEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'forms_forms';

    protected $titleName = 'form_name';

    protected $rules = [
        'form_name' => 'required',
        'form_description' => '',
        'form_slug' => 'required|unique:forms_forms,form_slug',
        'form_handler' => 'required',
        'form_view_options' => '',
        'success_message' => '',
        'success_redirect' => '',
        'send_notification' => '',
        'notification_send_to' => '',
        'notification_cc' => '',
        'notification_bcc' => '',
        'notification' => '',
        'send_autoresponder' => '',
        'user_email_field' => '',
        'autoresponder' => '',
];

    protected $fields = [
        'form_name',
        'form_description',
        'form_slug',
        'form_handler',
        'form_view_options',
        'success_message',
        'success_redirect',
        'send_notification',
        'notification_send_to',
        'notification_cc',
        'notification_bcc',
        'notification',
        'send_autoresponder',
        'user_email_field',
        'autoresponder',
];

    protected $with = ["translations"];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = ['notification', 'user_email_field', 'autoresponder'];

    protected $translatedAttributes = ['success_message', 'success_redirect', 'notification_send_to', 'notification_cc', 'notification_bcc'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Forms\FormsFormsEntryTranslationsModel';

    protected $stream = [
'id' => '63',
'sort_order' => '',
'namespace' => 'forms',
'slug' => 'forms',
'prefix' => 'forms_',
'title_column' => 'form_name',
'order_by' => 'id',
'locked' => '0',
'hidden' => '0',
'sortable' => '0',
'searchable' => '0',
'trashable' => '1',
'translatable' => '1',
'versionable' => '0',
'config' => 'a:0:{}',
'assignments' => [
[
'id' => 341,
'sort_order' => 197,
'stream_id' => 63,
'field_id' => 257,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '257',
'namespace' => 'forms',
'slug' => 'form_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 257,
'field_id' => 257,
'locale' => 'en',
'name' => 'anomaly.module.forms::field.form_name.name',
'placeholder' => 'anomaly.module.forms::field.form_name.placeholder',
'warning' => 'anomaly.module.forms::field.form_name.warning',
'instructions' => 'anomaly.module.forms::field.form_name.instructions',
],
],
],
'translations' => [
[
'id' => 338,
'assignment_id' => 341,
'locale' => 'en',
'label' => 'anomaly.module.forms::field.form_name.label.forms',
'warning' => 'anomaly.module.forms::field.form_name.warning.forms',
'placeholder' => 'anomaly.module.forms::field.form_name.placeholder.forms',
'instructions' => 'anomaly.module.forms::field.form_name.instructions.forms',
],
],
],
[
'id' => 342,
'sort_order' => 198,
'stream_id' => 63,
'field_id' => 258,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '258',
'namespace' => 'forms',
'slug' => 'form_description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 258,
'field_id' => 258,
'locale' => 'en',
'name' => 'anomaly.module.forms::field.form_description.name',
'placeholder' => 'anomaly.module.forms::field.form_description.placeholder',
'warning' => 'anomaly.module.forms::field.form_description.warning',
'instructions' => 'anomaly.module.forms::field.form_description.instructions',
],
],
],
'translations' => [
[
'id' => 339,
'assignment_id' => 342,
'locale' => 'en',
'label' => 'anomaly.module.forms::field.form_description.label.forms',
'warning' => 'anomaly.module.forms::field.form_description.warning.forms',
'placeholder' => 'anomaly.module.forms::field.form_description.placeholder.forms',
'instructions' => 'anomaly.module.forms::field.form_description.instructions.forms',
],
],
],
[
'id' => 343,
'sort_order' => 199,
'stream_id' => 63,
'field_id' => 259,
'config' => 'a:0:{}',
'unique' => 1,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '259',
'namespace' => 'forms',
'slug' => 'form_slug',
'type' => 'anomaly.field_type.slug',
'config' => 'a:1:{s:7:"slugify";s:9:"form_name";}',
'locked' => '1',
'translations' => [
[
'id' => 259,
'field_id' => 259,
'locale' => 'en',
'name' => 'anomaly.module.forms::field.form_slug.name',
'placeholder' => 'anomaly.module.forms::field.form_slug.placeholder',
'warning' => 'anomaly.module.forms::field.form_slug.warning',
'instructions' => 'anomaly.module.forms::field.form_slug.instructions',
],
],
],
'translations' => [
[
'id' => 340,
'assignment_id' => 343,
'locale' => 'en',
'label' => 'anomaly.module.forms::field.form_slug.label.forms',
'warning' => 'anomaly.module.forms::field.form_slug.warning.forms',
'placeholder' => 'anomaly.module.forms::field.form_slug.placeholder.forms',
'instructions' => 'anomaly.module.forms::field.form_slug.instructions.forms',
],
],
],
[
'id' => 344,
'sort_order' => 200,
'stream_id' => 63,
'field_id' => 260,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '260',
'namespace' => 'forms',
'slug' => 'form_handler',
'type' => 'anomaly.field_type.addon',
'config' => 'a:3:{s:4:"type";s:9:"extension";s:6:"search";s:36:"anomaly.module.forms::form_handler.*";s:13:"default_value";s:38:"anomaly.extension.default_form_handler";}',
'locked' => '1',
'translations' => [
[
'id' => 260,
'field_id' => 260,
'locale' => 'en',
'name' => 'anomaly.module.forms::field.form_handler.name',
'placeholder' => 'anomaly.module.forms::field.form_handler.placeholder',
'warning' => 'anomaly.module.forms::field.form_handler.warning',
'instructions' => 'anomaly.module.forms::field.form_handler.instructions',
],
],
],
'translations' => [
[
'id' => 341,
'assignment_id' => 344,
'locale' => 'en',
'label' => 'anomaly.module.forms::field.form_handler.label.forms',
'warning' => 'anomaly.module.forms::field.form_handler.warning.forms',
'placeholder' => 'anomaly.module.forms::field.form_handler.placeholder.forms',
'instructions' => 'anomaly.module.forms::field.form_handler.instructions.forms',
],
],
],
[
'id' => 345,
'sort_order' => 201,
'stream_id' => 63,
'field_id' => 261,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '261',
'namespace' => 'forms',
'slug' => 'form_view_options',
'type' => 'anomaly.field_type.tags',
'config' => 'a:2:{s:7:"handler";s:54:"Anomaly\FormsModule\Form\Form\Field\ViewOptions@handle";s:19:"allow_creating_tags";b:0;}',
'locked' => '1',
'translations' => [
[
'id' => 261,
'field_id' => 261,
'locale' => 'en',
'name' => 'anomaly.module.forms::field.form_view_options.name',
'placeholder' => 'anomaly.module.forms::field.form_view_options.placeholder',
'warning' => 'anomaly.module.forms::field.form_view_options.warning',
'instructions' => 'anomaly.module.forms::field.form_view_options.instructions',
],
],
],
'translations' => [
[
'id' => 342,
'assignment_id' => 345,
'locale' => 'en',
'label' => 'anomaly.module.forms::field.form_view_options.label.forms',
'warning' => 'anomaly.module.forms::field.form_view_options.warning.forms',
'placeholder' => 'anomaly.module.forms::field.form_view_options.placeholder.forms',
'instructions' => 'anomaly.module.forms::field.form_view_options.instructions.forms',
],
],
],
[
'id' => 346,
'sort_order' => 202,
'stream_id' => 63,
'field_id' => 281,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '281',
'namespace' => 'forms',
'slug' => 'success_message',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 281,
'field_id' => 281,
'locale' => 'en',
'name' => 'anomaly.module.forms::field.success_message.name',
'placeholder' => 'anomaly.module.forms::field.success_message.placeholder',
'warning' => 'anomaly.module.forms::field.success_message.warning',
'instructions' => 'anomaly.module.forms::field.success_message.instructions',
],
],
],
'translations' => [
[
'id' => 343,
'assignment_id' => 346,
'locale' => 'en',
'label' => 'anomaly.module.forms::field.success_message.label.forms',
'warning' => 'anomaly.module.forms::field.success_message.warning.forms',
'placeholder' => 'anomaly.module.forms::field.success_message.placeholder.forms',
'instructions' => 'anomaly.module.forms::field.success_message.instructions.forms',
],
],
],
[
'id' => 347,
'sort_order' => 203,
'stream_id' => 63,
'field_id' => 282,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '282',
'namespace' => 'forms',
'slug' => 'success_redirect',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 282,
'field_id' => 282,
'locale' => 'en',
'name' => 'anomaly.module.forms::field.success_redirect.name',
'placeholder' => 'anomaly.module.forms::field.success_redirect.placeholder',
'warning' => 'anomaly.module.forms::field.success_redirect.warning',
'instructions' => 'anomaly.module.forms::field.success_redirect.instructions',
],
],
],
'translations' => [
[
'id' => 344,
'assignment_id' => 347,
'locale' => 'en',
'label' => 'anomaly.module.forms::field.success_redirect.label.forms',
'warning' => 'anomaly.module.forms::field.success_redirect.warning.forms',
'placeholder' => 'anomaly.module.forms::field.success_redirect.placeholder.forms',
'instructions' => 'anomaly.module.forms::field.success_redirect.instructions.forms',
],
],
],
[
'id' => 348,
'sort_order' => 204,
'stream_id' => 63,
'field_id' => 274,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '274',
'namespace' => 'forms',
'slug' => 'send_notification',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 274,
'field_id' => 274,
'locale' => 'en',
'name' => 'anomaly.module.forms::field.send_notification.name',
'placeholder' => 'anomaly.module.forms::field.send_notification.placeholder',
'warning' => 'anomaly.module.forms::field.send_notification.warning',
'instructions' => 'anomaly.module.forms::field.send_notification.instructions',
],
],
],
'translations' => [
[
'id' => 345,
'assignment_id' => 348,
'locale' => 'en',
'label' => 'anomaly.module.forms::field.send_notification.label.forms',
'warning' => 'anomaly.module.forms::field.send_notification.warning.forms',
'placeholder' => 'anomaly.module.forms::field.send_notification.placeholder.forms',
'instructions' => 'anomaly.module.forms::field.send_notification.instructions.forms',
],
],
],
[
'id' => 349,
'sort_order' => 205,
'stream_id' => 63,
'field_id' => 275,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '275',
'namespace' => 'forms',
'slug' => 'notification_send_to',
'type' => 'anomaly.field_type.tags',
'config' => 'a:1:{s:6:"filter";a:1:{i:0;s:21:"FILTER_VALIDATE_EMAIL";}}',
'locked' => '1',
'translations' => [
[
'id' => 275,
'field_id' => 275,
'locale' => 'en',
'name' => 'anomaly.module.forms::field.notification_send_to.name',
'placeholder' => 'anomaly.module.forms::field.notification_send_to.placeholder',
'warning' => 'anomaly.module.forms::field.notification_send_to.warning',
'instructions' => 'anomaly.module.forms::field.notification_send_to.instructions',
],
],
],
'translations' => [
[
'id' => 346,
'assignment_id' => 349,
'locale' => 'en',
'label' => 'anomaly.module.forms::field.notification_send_to.label.forms',
'warning' => 'anomaly.module.forms::field.notification_send_to.warning.forms',
'placeholder' => 'anomaly.module.forms::field.notification_send_to.placeholder.forms',
'instructions' => 'anomaly.module.forms::field.notification_send_to.instructions.forms',
],
],
],
[
'id' => 350,
'sort_order' => 206,
'stream_id' => 63,
'field_id' => 272,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '272',
'namespace' => 'forms',
'slug' => 'notification_cc',
'type' => 'anomaly.field_type.tags',
'config' => 'a:1:{s:6:"filter";a:1:{i:0;s:21:"FILTER_VALIDATE_EMAIL";}}',
'locked' => '1',
'translations' => [
[
'id' => 272,
'field_id' => 272,
'locale' => 'en',
'name' => 'anomaly.module.forms::field.notification_cc.name',
'placeholder' => 'anomaly.module.forms::field.notification_cc.placeholder',
'warning' => 'anomaly.module.forms::field.notification_cc.warning',
'instructions' => 'anomaly.module.forms::field.notification_cc.instructions',
],
],
],
'translations' => [
[
'id' => 347,
'assignment_id' => 350,
'locale' => 'en',
'label' => 'anomaly.module.forms::field.notification_cc.label.forms',
'warning' => 'anomaly.module.forms::field.notification_cc.warning.forms',
'placeholder' => 'anomaly.module.forms::field.notification_cc.placeholder.forms',
'instructions' => 'anomaly.module.forms::field.notification_cc.instructions.forms',
],
],
],
[
'id' => 351,
'sort_order' => 207,
'stream_id' => 63,
'field_id' => 273,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '273',
'namespace' => 'forms',
'slug' => 'notification_bcc',
'type' => 'anomaly.field_type.tags',
'config' => 'a:1:{s:6:"filter";a:1:{i:0;s:21:"FILTER_VALIDATE_EMAIL";}}',
'locked' => '1',
'translations' => [
[
'id' => 273,
'field_id' => 273,
'locale' => 'en',
'name' => 'anomaly.module.forms::field.notification_bcc.name',
'placeholder' => 'anomaly.module.forms::field.notification_bcc.placeholder',
'warning' => 'anomaly.module.forms::field.notification_bcc.warning',
'instructions' => 'anomaly.module.forms::field.notification_bcc.instructions',
],
],
],
'translations' => [
[
'id' => 348,
'assignment_id' => 351,
'locale' => 'en',
'label' => 'anomaly.module.forms::field.notification_bcc.label.forms',
'warning' => 'anomaly.module.forms::field.notification_bcc.warning.forms',
'placeholder' => 'anomaly.module.forms::field.notification_bcc.placeholder.forms',
'instructions' => 'anomaly.module.forms::field.notification_bcc.instructions.forms',
],
],
],
[
'id' => 352,
'sort_order' => 208,
'stream_id' => 63,
'field_id' => 276,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '276',
'namespace' => 'forms',
'slug' => 'notification',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:50:"Anomaly\FormsModule\Notification\NotificationModel";}',
'locked' => '1',
'translations' => [
[
'id' => 276,
'field_id' => 276,
'locale' => 'en',
'name' => 'anomaly.module.forms::field.notification.name',
'placeholder' => 'anomaly.module.forms::field.notification.placeholder',
'warning' => 'anomaly.module.forms::field.notification.warning',
'instructions' => 'anomaly.module.forms::field.notification.instructions',
],
],
],
'translations' => [
[
'id' => 349,
'assignment_id' => 352,
'locale' => 'en',
'label' => 'anomaly.module.forms::field.notification.label.forms',
'warning' => 'anomaly.module.forms::field.notification.warning.forms',
'placeholder' => 'anomaly.module.forms::field.notification.placeholder.forms',
'instructions' => 'anomaly.module.forms::field.notification.instructions.forms',
],
],
],
[
'id' => 353,
'sort_order' => 209,
'stream_id' => 63,
'field_id' => 277,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '277',
'namespace' => 'forms',
'slug' => 'send_autoresponder',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 277,
'field_id' => 277,
'locale' => 'en',
'name' => 'anomaly.module.forms::field.send_autoresponder.name',
'placeholder' => 'anomaly.module.forms::field.send_autoresponder.placeholder',
'warning' => 'anomaly.module.forms::field.send_autoresponder.warning',
'instructions' => 'anomaly.module.forms::field.send_autoresponder.instructions',
],
],
],
'translations' => [
[
'id' => 350,
'assignment_id' => 353,
'locale' => 'en',
'label' => 'anomaly.module.forms::field.send_autoresponder.label.forms',
'warning' => 'anomaly.module.forms::field.send_autoresponder.warning.forms',
'placeholder' => 'anomaly.module.forms::field.send_autoresponder.placeholder.forms',
'instructions' => 'anomaly.module.forms::field.send_autoresponder.instructions.forms',
],
],
],
[
'id' => 354,
'sort_order' => 210,
'stream_id' => 63,
'field_id' => 278,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '278',
'namespace' => 'forms',
'slug' => 'user_email_field',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:4:{s:7:"related";s:41:"Anomaly\Streams\Platform\Field\FieldModel";s:7:"handler";s:6:"fields";s:9:"namespace";s:5:"forms";s:8:"unlocked";b:1;}',
'locked' => '1',
'translations' => [
[
'id' => 278,
'field_id' => 278,
'locale' => 'en',
'name' => 'anomaly.module.forms::field.user_email_field.name',
'placeholder' => 'anomaly.module.forms::field.user_email_field.placeholder',
'warning' => 'anomaly.module.forms::field.user_email_field.warning',
'instructions' => 'anomaly.module.forms::field.user_email_field.instructions',
],
],
],
'translations' => [
[
'id' => 351,
'assignment_id' => 354,
'locale' => 'en',
'label' => 'anomaly.module.forms::field.user_email_field.label.forms',
'warning' => 'anomaly.module.forms::field.user_email_field.warning.forms',
'placeholder' => 'anomaly.module.forms::field.user_email_field.placeholder.forms',
'instructions' => 'anomaly.module.forms::field.user_email_field.instructions.forms',
],
],
],
[
'id' => 355,
'sort_order' => 211,
'stream_id' => 63,
'field_id' => 279,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '279',
'namespace' => 'forms',
'slug' => 'autoresponder',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:50:"Anomaly\FormsModule\Notification\NotificationModel";}',
'locked' => '1',
'translations' => [
[
'id' => 279,
'field_id' => 279,
'locale' => 'en',
'name' => 'anomaly.module.forms::field.autoresponder.name',
'placeholder' => 'anomaly.module.forms::field.autoresponder.placeholder',
'warning' => 'anomaly.module.forms::field.autoresponder.warning',
'instructions' => 'anomaly.module.forms::field.autoresponder.instructions',
],
],
],
'translations' => [
[
'id' => 352,
'assignment_id' => 355,
'locale' => 'en',
'label' => 'anomaly.module.forms::field.autoresponder.label.forms',
'warning' => 'anomaly.module.forms::field.autoresponder.warning.forms',
'placeholder' => 'anomaly.module.forms::field.autoresponder.placeholder.forms',
'instructions' => 'anomaly.module.forms::field.autoresponder.instructions.forms',
],
],
],
],
'translations' => [
[
'id' => 66,
'stream_id' => 63,
'locale' => 'en',
'name' => 'anomaly.module.forms::stream.forms.name',
'description' => 'anomaly.module.forms::stream.forms.description',
],
],
];

    
    /**
     * The notification relation
     *
     * @return Relation
     */
    public function notification()
    {
        return $this->getFieldType('notification')->getRelation();
    }

    /**
     * The user email field relation
     *
     * @return Relation
     */
    public function userEmailField()
    {
        return $this->getFieldType('user_email_field')->getRelation();
    }

    /**
     * The autoresponder relation
     *
     * @return Relation
     */
    public function autoresponder()
    {
        return $this->getFieldType('autoresponder')->getRelation();
    }

}
