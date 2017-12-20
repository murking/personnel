<?php

namespace backend\controllers;

use common\models\Contract;
use Yii;
use common\models\Basic;
use common\models\BasicSearch;
use common\models\UploadForm;
use yii\web\UploadedFile;
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
    public function actionUpload(){
        $model = new UploadForm();
        $searchModel = new BasicSearch();
        $dateProvider = $searchModel->search(Yii::$app->request->queryParams);
        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {
                // file is uploaded successfully

                return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dateProvider,
                ]);
            }
        }
        return $this->render('upload', ['model' => $model]);
    }
    public function actionExport(){
        $searchModel = new BasicSearch();
        $dateProvider = $searchModel->search(Yii::$app->request->queryParams);
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
            // 设置表头
            $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1', '员工ID')
                ->setCellValue('B1', '姓名')
                ->setCellValue('C1', '部门')
                ->setCellValue('D1', '职务')
                ->setCellValue('E1', '身份证')
                ->setCellValue('F1', '性别')
                ->setCellValue('G1', '政治面貌')
                ->setCellValue('H1', '出生日期')
                ->setCellValue('I1', '教育背景')
                ->setCellValue('J1', '学位')
                ->setCellValue('K1', '毕业时间')
                ->setCellValue('L1', '毕业学校')
                ->setCellValue('M1', '专业')
                ->setCellValue('N1', '职务')
                ->setCellValue('O1', '籍贯')
                ->setCellValue('P1', '籍贯地址')
                ->setCellValue('Q1', '联系地址')
                ->setCellValue('R1', '邮编')
                ->setCellValue('S1', '手机号')
                ->setCellValue('T1', '家庭电话')
                ->setCellValue('U1', '进入公司时间')
                ->setCellValue('V1', '合同类型')
                ->setCellValue('W1', '合同编号')
                ->setCellValue('X1', '合同开始日期')
                ->setCellValue('Y1', '合同结束日期')
                ->setCellValue('Z1', '档案所在地')
                ->setCellValue('AA1', '劳动手册')
                ->setCellValue('AB1', '办理录用手续时间')
                ->setCellValue('AC1', '办理保险时间')
                ->setCellValue('AD1', '办理公积金时间')
                ->setCellValue('AE1', '离职时间');

            $n=2;
            // 设置内容
            foreach($data as $v){
                $c = Contract::find()->where(['conbasic'=>$v['idbasic']])->one();
                $objPHPExcel->getActiveSheet()->setCellValue('A'.$n,$v['idbasic']);
                $objPHPExcel->getActiveSheet()->setCellValue('B'.$n,$v['name']);
                $objPHPExcel->getActiveSheet()->setCellValue('C'.$n,$v['department']);
                $objPHPExcel->getActiveSheet()->setCellValue('D'.$n,$v['duty']);
                $objPHPExcel->getActiveSheet()->setCellValue('E'.$n,$v['idcard']);
                $objPHPExcel->getActiveSheet()->setCellValue('F'.$n,$v['sex']);
                $objPHPExcel->getActiveSheet()->setCellValue('G'.$n,$v['politic']);
                $objPHPExcel->getActiveSheet()->setCellValue('H'.$n,$v['brithdate']);
                $objPHPExcel->getActiveSheet()->setCellValue('I'.$n,$v['educationbk']);
                $objPHPExcel->getActiveSheet()->setCellValue('J'.$n,$v['degree']);
                $objPHPExcel->getActiveSheet()->setCellValue('K'.$n,$v['graduationdate']);
                $objPHPExcel->getActiveSheet()->setCellValue('L'.$n,$v['graduationsc']);
                $objPHPExcel->getActiveSheet()->setCellValue('M'.$n,$v['major']);
                $objPHPExcel->getActiveSheet()->setCellValue('N'.$n,$v['jobtitle']);
                $objPHPExcel->getActiveSheet()->setCellValue('O'.$n,$v['householdreg']);
                $objPHPExcel->getActiveSheet()->setCellValue('P'.$n,$v['householdadd']);
                $objPHPExcel->getActiveSheet()->setCellValue('Q'.$n,$v['address']);
                $objPHPExcel->getActiveSheet()->setCellValue('R'.$n,$v['zip']);
                $objPHPExcel->getActiveSheet()->setCellValue('S'.$n,$v['phone']);
                $objPHPExcel->getActiveSheet()->setCellValue('T'.$n,$v['homephone']);
                $objPHPExcel->getActiveSheet()->setCellValue('U'.$n,$v['entrydate']);
                $objPHPExcel->getActiveSheet()->setCellValue('V'.$n,$c['contype']);
                $objPHPExcel->getActiveSheet()->setCellValue('W'.$n,$c['connumber']);
                $objPHPExcel->getActiveSheet()->setCellValue('X'.$n,$c['conbegin']);
                $objPHPExcel->getActiveSheet()->setCellValue('Y'.$n,$c['conend']);
                $objPHPExcel->getActiveSheet()->setCellValue('Z'.$n,$c['conpleace']);
                $objPHPExcel->getActiveSheet()->setCellValue('AA'.$n,$c['conbook']);
                $objPHPExcel->getActiveSheet()->setCellValue('AB'.$n,$c['applydate']);
                $objPHPExcel->getActiveSheet()->setCellValue('AC'.$n,$c['insurancedate']);
                $objPHPExcel->getActiveSheet()->setCellValue('AD'.$n,$c['funddate']);
                $objPHPExcel->getActiveSheet()->setCellValue('AE'.$n,$c['departdate']);
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

        $uploadmodel = new UploadForm();

        if (Yii::$app->request->isPost) {
            $uploadmodel->file = UploadedFile::getInstance($uploadmodel, 'file');

            if ($uploadmodel->file && $uploadmodel->validate()) {
                $uploadmodel->file->saveAs('uploads/' . $uploadmodel->file->baseName . '.' . $uploadmodel->file->extension);
            }
        }



        $filename='./../web/test.xls';
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
            for($col=0;$col<21;$col++)
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
        ],$excelData)->execute();
        $excelData2=array();
        for($row=2;$row<=$highestRow;$row++)
        {
            $excelData2[$row][]=(string)$sheet->getCellByColumnAndRow(0,$row)->getValue();
            for($col=21;$col<$highestColumnIndex;$col++)
            {
                $excelData2[$row][]=(string)$sheet->getCellByColumnAndRow($col,$row)->getValue();
            }

        }
        Yii::$app->db->createCommand()->batchInsert('contract', [
            'conbasic',
            'contype',
            'connumber',
            'conbegin',
            'conend',
            'conpleace',
            'conbook',
            'applydate',
            'insurancedate',
            'funddate',
            'departdate',
            //'conbasic',
        ],$excelData2)->execute();

        echo 'insert success.';
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dateProvider,

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
