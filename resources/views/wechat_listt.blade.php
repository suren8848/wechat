<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>列表</title>
</head>
<body>
<center>
		<table border=1 width="400" height="300">
			<tr>
				<td>微信号</td>
				<td>昵称</td>
				<td>头像</td>
				<td>性别</td>
				<td>是否关注</td>
				<td>城市</td>
				<td>省份</td>
				<td>国家</td>
				<td>添加时间</td>
			</tr>
			<tr>
				<td>{{$info['openid']}}</td>
				<td>{{$info['nickname']}}</td>
				<td><img src="{{$info['headimgurl']}}" width="50" alt=""></td>	
				<td>@if($info['sex']==1)男	
				@else($info['sex']==2)女
				@endif
				</td>
				<td>
				@if($info['subscribe']==1)已关注	
				@else($info['subscribe']==2)未关注
				@endif
				</td>
				<td>{{$info['city']}}</td>
				<td>{{$info['province']}}</td>
				<td>{{$info['country']}}</td>
				<td>{{date('Y-m-d H:i:s',$info['subscribe_time'])}}</td>
			</tr>
		</table>
	</center>
</body>
</html>