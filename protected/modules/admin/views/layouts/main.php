<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" charset="utf-8">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/default.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<body>
        <div id="s4-workspace">
            <div id="s4-bodyContainer">
                <div class="page">
                    <div class="header">
                        <div>
                            <div class="logo">
                                <a href="/">Челябинский государственный университет
                                    <span>первый университет на Южном Урале</span>
                                </a>
                            </div>
                        </div>
                            
                    </div>

	<div id="mainmenu">
	<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Категории', 'url'=>array('/admin/category')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div class="footer">
                        <div class="info">
                            <div class="c1">
                                <h3>Адрес университета</h3>
                                <p>454001, г. Челябинск,<br />ул.Братьев Кашириных, 129</p>
                            </div>
                            <div class="c2">
                                <h3>Телефоны</h3>
                                <p>
                                    <span>+7 (351) 799-71-66</span>
                                    приемная комиссия <br />
                                    <span>+7 (351) 799-71-01</span>
                                    приемная ректора
                                </p>
                            </div>
                            <div class="c3">
                                <h3>ЧелГУ в социальных сетях</h3>
                                <ul class="socials">
                                    <li>
                                        <a href="https://facebook.com/csu76" class="social social-fb">
                                            <!-- -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/csu76" class="social social-tw">
                                            <!-- -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://vk.com/csu76" class="social social-vk">
                                            <!-- -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://plus.google.com/b/108725795425654313142/108725795425654313142/posts" class="social social-gl">
                                            <!-- -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/_layouts/15/listfeed.aspx?List=%7BB1125D38-8A1A-4D0D-A322-448BB85B867F%7D&amp;" class="social social-rs">
                                            <!-- -->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
                           
            </div>
        </div>
    <div class="copyright">
         <p>© 2010-<?php echo date('Y'); ?> Федеральное государственное бюджетное образовательное учреждение высшего профессионального образования «Челябинский государственный университет»</p>
    </div>
</body>
</html>
