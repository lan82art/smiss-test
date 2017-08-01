<?php
/* @var $this yii\web\View */
use kartik\tree\TreeView;
use app\models\Tree;

$this->title = 'smiss test task';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-xs-6">
                <?php
                echo TreeView::widget([
                    // single query fetch to render the tree
                    // use the Product model you have in the previous step
                    'query' => Tree::find()->addOrderBy('root, lft'),
                    'headingOptions' => ['label' => 'Categories'],
                    'fontAwesome' => false,     // optional
                    'isAdmin' => true,         // optional (toggle to enable admin mode)
                    'displayValue' => 1,        // initial display value
                    'softDelete' => true,       // defaults to true
                    'cacheSettings' => [
                        'enableCache' => true   // defaults to true
                    ]
                ]);
                ?>
            </div>
            <div class="col-xs-6">second panel</div>
        </div>

    </div>
</div>
