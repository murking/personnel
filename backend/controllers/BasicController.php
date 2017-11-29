<?php

namespace backend\controllers;

use common\models\Contract;
use Yii;
use common\models\Basic;
use common\models\BasicSearch;
use common\models\ContractSearch;
use common\models\FamilySearch;
use common\models\LearnexperienceSearch;
use common\models\WorkexpsSearch;
use common\models\Workper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use PHPExcel;

/**
 * BasicController implements the CRUD actions for Basic model.
 */
class BasicController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Basic models.
     * @return mixed
     */
    public function actionExport(){
        $searchModel = new BasicSearch();
        $dateProvider = $searchModel->search(Yii::$app->request->queryParams);
<<<<<<< HEAD
=======
        $data=Basic::find()->asArray()->all();
        //foreach($data as $v)
          //  print_r($v);
>>>>>>> add375ddc5cc107685d570ef6607b9f592fa5c1d

        $data=Basic::find()->asArray()->all();
        if(!$data){
            return $this->redirect(['Country/index']);
        }else{
            $objPHPExcel=new PHPExcel();
            $objPHPExcel->getProperties()->setCreator("zhangsan")
                ->setLastModifiedBy("lisi")
                ->setTitle("my title")
                ->setSubject("my subject")
                ->setDescription("my description")
                ->setKeywords("my keywords")
                ->setCategory("my category");

            // 设置列宽
            $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
            $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);

            // 设置表头
            $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1', '姓名')
                ->setCellValue('B1', '部门')
                ->setCellValue('C1', '职务')
                ->setCellValue('D1', '身份证');
            $n=2;
            // 设置内容
            foreach($data as $v){
                $c = Contract::find()->where(['conbasic'=>$v['idbasic']])->one();
                $objPHPExcel->getActiveSheet()->setCellValue('A'.$n,$v['name']);
                $objPHPExcel->getActiveSheet()->setCellValue('B'.$n,$v['department']);
                $objPHPExcel->getActiveSheet()->setCellValue('C'.$n,$v['duty']);
<<<<<<< HEAD
                $objPHPExcel->getActiveSheet()->setCellValue('D'.$n,$c['connumber']);
=======
                $objPHPExcel->getActiveSheet()->setCellValue('D'.$n,$v['idcard']);
>>>>>>> add375ddc5cc107685d570ef6607b9f592fa5c1d

                $n=$n+1;
            }
            // 重命名
            $objPHPExcel->getActiveSheet()->setTitle('test-sheet');
            $objPHPExcel->setActiveSheetIndex(0);
            // 输出
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="test.xls"');
            header('Cache-Control: max-age=0');
            $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');  //注意，要加“\”，否则会报错
            $objWriter->save('php://output');
        }
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dateProvider,

        ]);
    }
    public function actionImport(){
        $searchModel = new BasicSearch();
        $dateProvider = $searchModel->search(Yii::$app->request->queryParams);


        $filename='./../upload/excel/test.xls';
        $objPHPExcelnew=new PHPExcel();
        $objReader= \PHPExcel_IOFactory::createReader('Excel5');

        $objPHPExcel=$objReader->load($filename);
        $sheet=$objPHPExcel->getActiveSheet();
        $highestRow=$sheet->getHighestRow();
        $highestColumn=$sheet->getHighestColumn();
        $highestColumnIndex=\PHPExcel_Cell::columnIndexFromString($highestColumn);
        $excelData=array();
        for($row=2;$row<=$highestRow;$row++)
        {
            for($col=0;$col<$highestColumnIndex;$col++)
            {
                $excelData[$row][]=(string)$sheet->getCellByColumnAndRow($col,$row)->getValue();
            }
        }
        Yii::$app->db->createCommand()->batchInsert('basic', [
            'idbasic',
            'name',
            'department',
            'duty',
            'idcard',
            'sex',
            'politic',
            'brithdate',
            'educationbk',
            'degree',
            'graduationdate',
            'graduationsc',
            'major',
            'jobtitle',
            'householdreg',
            'householdadd',
            'address' ,
            'zip',
            'phone',
            'homephone',
            'entrydate',
            //'idcontract',
            //'contype',
            //'connumber',
            //'conbegin',
            //'conend',
            //'conpleace',
            //'conbook',
            //'applydate',
            //'insurancedate',
            //'funddate',
            //'departdate',
            //'conbasic',
        ],$excelData)->execute();
        echo 'insert success.';
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dateProvider,
            'basePath' => Yii::$app->basePath,
            'test' => $filename,
        ]);
    }
    /**
     * Lists all Basic models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BasicSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,

        ]);
    }

    /**
     * Displays a single Basic model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Basic model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Basic();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idbasic]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Basic model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idbasic]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Basic model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = Basic::findOne($id);
        foreach ($model->contracts as $v)
            $v->delete();
        foreach ($model->families as $v)
            $v->delete();
        foreach ($model->learnexperiences as $v)
            $v->delete();
        foreach ($model->workexps as $v)
            $v->delete();
        foreach ($model->workpers as $v)
            $v->delete();

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Basic model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Basic the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Basic::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
