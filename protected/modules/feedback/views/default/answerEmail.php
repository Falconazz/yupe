<html>
<head>
    <title><?php echo Yii::t('feedback','Ответ на ваше сообщение с сайта {site}',array('{site}' => Yii::app()->name));?></title>
</head>
<body>
<?php echo Yii::t('feedback','Ответ на ваше сообщение с сайта {site}',array('{site}' => Yii::app()->name));?>
<br/>

<?php echo Yii::t('feedback','Вы писали');?>: <?php echo CHtml::encode($model->theme);?><br/><br/>
<?php echo CHtml::encode($model->text);?><br/><br/>

<?php echo Yii::t('feedback','Наш ответ');?>: <?php echo CHtml::encode($model->answer);?><br/><br/>

<br/>
<?php echo Yii::t('feedback','С уважением, администрация сайта {site} !',array('{site}' => CHtml::encode(Yii::app()->name)));?>
</body>
</html>  