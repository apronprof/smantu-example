<?php

namespace ML\Trainers;

require __DIR__ . '/../../consts.php';
require ROOT .  '/vendor/autoload.php';

use Core\Classes\QueryBuilder;
use Core\Classes\DB;
use App\Models\House;
use Rubix\ML\Datasets\Labeled;
use Rubix\ML\Datasets\Unlabeled;
use Rubix\ML\Regressors\Ridge;
use Rubix\ML\PersistentModel;
use Rubix\ML\Persisters\Filesystem;
use Rubix\ML\Serializers\RBX;

new DB();
$dataFromDB = House::get();
$samples = [];
$labesl = [];

foreach($dataFromDB as $house){
    $samples[] = [$house['area'], $house['num_rooms'], $house['floor']];
    $labels[] = $house['price'];
}

$dataset = new Labeled($samples, $labels);
$model = new Ridge();
$model->train($dataset);

echo $model->predict(new Unlabeled([[30, 1, 2]]))[0];


$modelPath = __DIR__ . '/../models/cost.rbx';
$estimator = new PersistentModel($model, new Filesystem($modelPath), new RBX());
$estimator->save();
 
