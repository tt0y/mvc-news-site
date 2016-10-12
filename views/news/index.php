<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Новости и погода</title>
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	<div id="menu-wrapper">
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="#">Главная</a></li>
				<li><a href="#">Блог</a></li>
				<li><a href="#">Фото</a></li>
				<li><a href="#">О нас</a></li>
				<li><a href="#">Ссылки</a></li>
				<li><a href="#">Контакты</a></li>
			</ul>
		</div>
		<!-- end #menu -->
	</div>

<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="#">Новости</a></h1>				
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
                                    
                                    
<?php foreach ($newsList as $newsItem): ?>
<div class="post">
        <h2 class="title"><a href='/news/view/<?php echo $newsItem['id'] ;?>'><?php echo $newsItem['title'].' # '.$newsItem['id'];?></a></h2>
        <p class="meta">Posted by <a href="#"><?php echo $newsItem['author_name'];?></a> on <?php echo $newsItem['date'];?>
                &nbsp;&bull;&nbsp; <a href='/news/view/<?php echo $newsItem['id'] ;?>' class="permalink"> Full article</a></p>
        
        <div class="entry">
                <p><img src="/template/images/pic0<?php echo $newsItem['id'] ;?>.jpg" width="800" height="300" alt="" /></p>
                <p><?php echo $newsItem['short_content'];?></p>
        </div>
</div>
<?php endforeach;?>
                                    
                                    
					<div style="clear: both;">&nbsp;</div>
				</div>
                            
				<!-- end #content -->
				<div id="sidebar">
					<ul>
						<li>
							<h2>Фраза дня на латыни</h2>
							<p>Hoc est vivere bis, vita posse priore frui.</p>
						</li>
						<li>
							<h2>Категории</h2>
							<ul>
								<li><a href="#">Итория программирования</a></li>
								<li><a href="#">Недокументированыне особенности</a></li>
								<li><a href="#">Икуственный интелект</a></li>
								<li><a href="#">Статьи</a></li>
								<li><a href="#">Обучающие видео</a></li>
							</ul>
						</li>
						<li>
							<h2>Блог</h2>
							<ul>
								<li><a href="#">Обсуждения</a></li>
								<li><a href="#">Рассуждения</a></li>
								<li><a href="#">Демогогия</a></li>
								<li><a href="#">Прочее</a></li>
							</ul>
						</li>
						<li>
							<h2>Архив новостей</h2>
							<ul>
								<li><a href="#">Самая старая новость</a></li>
								<li><a href="#">Чуть менее чем очень старая</a></li>
								<li><a href="#">Старая, но не такая как предыдущая</a></li>
								<li><a href="#">Все еще старая</a></li>
								<li><a href="#">Почти новая</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p> Новости и погода. 2016 </p>
</div>
<!-- end #footer -->
</body>
</html>
