<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Test</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<div class="mainHead"><?=$about[0]->name;?></div>
	<div class="flex-container">
		<div class="left centerImg" ><img src="left.png"></div>
		<div class="middle" >
			<div class="insideMiddleHead"><?=$about[0]->name;?></div>
			<div class="tableDiv">
				<table>
					<tr>
						<th>Общие данные</th>
					</tr>
					<tr>
						<td class="firstColumn">Телефон:</td>
						<td><a href="#">+<?=$about[0]->phone;?></a></td>
					</tr>
					<tr>
						<td class="firstColumn">Родной город:</td>
						<td><a href="#"><?=$about[0]->city;?></a></td>
					</tr>
				</table>
			</div>
			<div class="buttonDiv">
				<button>Написать</button>
			</div>
			<div class="listDiv">
				<span>Список услуг</span>
				<ul>
					<?php 
					foreach ($services as $service) 
					{
						echo '<li><a href="#">'.$service->style.'</a></li>';
					}
					?>
				</ul>
			</div>
		</div>
		<div class="right centerImg"><img src="right.png"></div>
	</div>
	<div>
		<h2>О компании</h2>
		<article>
			<h1>Передовая статья</h1>
			<p><?=$about[0]->about;?></p>
			<ul>
				<li>Общеполитическими...</li>
				<li>Общеполитическими...</li>
				<li>Общеполитическими...</li>
			</ul>
		</article>
	</div>
	<div class="title">
    <span>
       Сотрудники
    </span>
</div>
<div class="workers">
	<?php
		foreach($workers as $worker)
		{
			echo '<div class="box"><div class="image"><img src='.$worker->src.'></div><div class="name"><span>'.$worker->name.'</span></div><button>Подробнее</button></div>';
		}
	?>
</div>
</body>
</html>