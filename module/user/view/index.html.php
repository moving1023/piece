<?php include '../../common/view/header.html.php';?>
<div class='container'>
	
	<div class="location"> 资料管理 >> 用户管理 </div>

	<div class="row pull-right">
		<div class="span"><input type="text" id="loginName" name="loginName" placeholder="请输入名称"/></div>
		<div class="span"><a class="btn"><icon class="icon-search"></icon> 查询</a></div>
	</div>
	
	<div class="btn-bar">
		<a class="btn btn-info"><icon class="icon-plus"></icon> 添加</a>
		<a class="btn btn-success"><icon class="icon-edit"></icon> 编辑</a>
		<a class="btn btn-danger"><icon class="icon-trash"></icon> 删除</a>
	</div>
	
	<div class="content">
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<tr><th>ID</th><th>姓名</th><th>年龄</th></tr>
			</thead>
			<tbody>
				<?php foreach($users as $user):?>
				<tr>
					<td><?php echo $user->id; ?></td>
					<td><?php echo $user->name; ?></td>
					<td><?php echo $user->age; ?></td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>