<?php namespace Anomaly\Streams\Platform\Model\Files;

use Anomaly\Streams\Platform\Entry\EntryModel;

class FilesImagesEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'files_images';

    protected $titleName = '';

    protected $rules = [
];

    protected $fields = [
];

    protected $with = ["translations"];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = [];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Files\FilesImagesEntryTranslationsModel';

    protected $stream = [
'slug' => 'images',
'namespace' => 'files',
'translatable' => '1',
'trashable' => '1',
'locked' => '',
'config' => 'a:0:{}',
'prefix' => 'files_',
'id' => '27',
'assignments' => [
],
'translations' => [
[
'locale' => 'en',
'stream_id' => 27,
'name' => 'Images',
'description' => 'A folder for images.',
'id' => 27,
],
],
];

    
}
