<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//后台
Route::get('/admin','admin\IndexController@index');
//后台登录
Route::get('/admin/login','admin\IndexController@login');
//后台登录处理
Route::post('/admin/login_do','admin\IndexController@login_do');
//后台登录
Route::get('/admin/logins','admin\ExamController@logins');
//后台登录处理
Route::post('/admin/logins_do','admin\ExamController@logins_do');
Route::get('/admin/adds','admin\ExamController@adds');

// Route::get('/admin/sadd','admin\ExamController@sadd');
Route::post('/admin/addsss_do','admin\ExamController@sadd_do');
//调研系统
Route::get('/admin/sadd','admin\ExamController@sadd');
Route::post('/admin/do_sadd','admin\ExamController@do_sadd');
Route::get('/admin/index','admin\ExamController@index');
Route::get('/admin/add_papers','admin\ExamController@add_papers');
Route::post('admin/do_add_papers','admin\ExamController@do_add_papers');
Route::post('admin/insert_papers','admin\ExamController@insert_papers');
Route::get('admin/test_list','admin\ExamController@test_list');
Route::get('admin/test_detail','admin\ExamController@test_detail');

//竞猜
Route::get('/cai/add','Cai@add');
Route::post('/cai/add_do','Cai@add_do');
Route::get('/cai/index','Cai@index');
Route::post('/cai/do_cai','Cai@do_cai');
Route::get('/cai/list','Cai@list');
Route::get('/cai/jieguo','Cai@jieguo');
Route::post('/cai/jieguo_do','Cai@jieguo_do');
Route::get('/cai/list_do','Cai@list_do');
//车库管理系统
Route::get('/cheku/login','Cheku@login');
Route::post('/cheku/login_do','Cheku@login_do');
Route::get('/cheku/add','Cheku@add');
Route::get('/cheku/adds','Cheku@adds');
Route::post('/cheku/adds_do','Cheku@adds_do');
Route::get('/cheku/index','Cheku@index');
Route::get('/cheku/out','Cheku@out');
Route::post('/cheku/out_do','Cheku@out_do');
Route::post('/cheku/chekuPrice','Cheku@chekuPrice');
Route::get('/cheku/del_price','Cheku@del_price');
//地图
Route::get('/map/index','Map@index');
Route::post('/map/add','Map@add');
Route::get('/map/list','Map@list');
//注册
Route::get('/zhuce/registers','Zhuce@registers');
Route::post('/zhuce/sendEmail','Zhuce@sendEmail');

//后台车票提交
Route::get('/admin/add','admin\Train@add');
//后台车票处理
Route::post('/admin/add_do','admin\Train@add_do');
Route::get('/admin/list','admin\Train@list');
//接口
Route::get('/wechat/get_user_info','Wechat@get_user_info');
Route::get('/wechat/user_info','Wechat@user_info');
Route::get('/wechat/get_user_list','Wechat@get_user_list');
Route::get('/wechat/user_list','Wechat@user_list');
Route::get('/wechat/lists','Wechat@lists');
Route::get('/wechat/code','Wechat@code');
Route::get('/wechat/login','Wechat@login');
Route::get('/wechat/template_list','Wechat@template_list');
Route::get('/wechat/del_template','Wechat@del_template');
Route::get('/wechat/push_template','Wechat@push_template');
Route::get('/wechat/sucai','Wechat@sucai');
Route::post('/wechat/do_upload','Wechat@do_upload');
Route::get('/wechat/upload_source','Wechat@upload_source');
//接口
Route::get('/weixin/get_user_info','Weixin@get_user_info');
Route::get('/weixin/get_user_infos','Weixin@get_user_infos');
Route::get('/weixin/user_info','Weixin@user_info');
Route::get('/weixin/get_user_list','Weixin@get_user_list');
Route::get('/weixin/user_list','Weixin@user_list');
Route::get('/weixin/lists','Weixin@lists');
Route::get('/weixin/code','Weixin@code');
Route::get('/weixin/login','Weixin@login');
Route::get('/weixin/template_list','Weixin@template_list');
Route::get('/weixin/del_template','Weixin@del_template');
Route::get('/weixin/push_template','Weixin@push_template');
//上传素材
Route::get('/weixin/sucai','Weixin@sucai');
Route::post('/weixin/do_upload','Weixin@do_upload');
Route::get('/weixin/upload_source','Weixin@upload_source');
Route::get('/weixin/get_source','Weixin@get_source');
Route::get('/weixin/get_video_source','Weixin@get_video_source');
Route::get('/weixin/get_voice_source','Weixin@get_voice_source');
Route::get('/weixin/sucai_list','Weixin@sucai_list');
Route::get('/weixin/get_access_token','Weixin@get_access_token');

//用户标签相关
Route::get('/weixin/taglist','Weixin@taglist'); //标签列表
Route::get('/weixin/add_tag','Weixin@add_tag'); //添加标签
Route::get('/weixin/do_add_tag','Weixin@do_add_tag'); //执行添加标签
Route::get('/weixin/add_user_tag','Weixin@add_user_tag'); //为用户打标签
Route::get('/weixin/del_tag','Weixin@del_tag'); //删除标签
Route::get('/weixin/tag_user','Weixin@tag_user'); //标签下用户列表
Route::get('/weixin/get_user_tag','Weixin@get_user_tag'); //获取用户标签
Route::get('/weixin/del_user_tag','Weixin@del_user_tag'); //删除用户标签
Route::get('/weixin/fensilist','Weixin@fensilist');//标签下用户列表展示
Route::get('/weixin/tag_do','Weixin@tag_do');//为标签下用户添加标签
Route::get('/weixin/tuisong','Weixin@tuisong');//推送消息
Route::post('/weixin/tuisong_do','Weixin@tuisong_do');//推送消息执行



Route::get('/index','index\IndexController@index');
//前台登录
Route::get('/index/login','index\IndexController@login');
//前台登录执行
Route::post('/index/login_do','index\IndexController@login_do');
//项目注册
Route::get('/index/register','index\IndexController@register');
//项目注册执行
Route::post('/index/register_do','index\IndexController@register_do');
//商品上传
Route::get('/admin/goods_add','admin\GoodsController@goods_add');
//商品上传执行
Route::post('/admin/goods_add_do','admin\GoodsController@goods_add_do');
//商品列表展示
Route::get('/admin/goods_list','admin\GoodsController@goods_list');
//商品删除
Route::get('/admin/goods_delete','admin\GoodsController@goods_delete');
//商品修改
Route::get('/admin/goods_update','admin\GoodsController@goods_update');
//商品修改执行
Route::post('/admin/goods_update_do','admin\GoodsController@goods_update_do');
//商品详情
Route::get('/index/goodsdetail','index\IndexController@goodsdetail');
//购物车
Route::get('/index/cart','index\IndexController@cart');

//购物车列表
Route::get('/index/cartlist','index\IndexController@cartlist');
//购物车删除
Route::get('/index/cartdelete', 'index\IndexController@cartdelete');
//订单详情
//Route::get('/index/order', 'index\IndexController@order');

//支付宝
Route::get('/do_pay', 'PayController@do_pay');
//订单详情
Route::get('confirm_pay', 'PayController@confirm_pay');
//支付订单详情
Route::get('index/order_list', 'index\IndexController@order_list');
Route::get('pay_order', 'PayController@pay_order');

//同步
Route::get('return_url', 'PayController@aliReturn');
//异步
Route::post('notify_url', 'PayController@aliNotify');
//学生信息展示
Route::get('/student/index','StudentController@index');

//学生信息添加提交页面
Route::post('/student/do_add','StudentController@do_add');
//删除
Route::get('/student/delete','StudentController@delete');
//修改
Route::get('/student/update','StudentController@update');
//修改处理
Route::post('/student/do_update','StudentController@do_update');
//登录视图
Route::get('/student/login','StudentController@login');
//登录
Route::post('/student/do_login','StudentController@do_login');

//调用中间件
Route::group(['middleware' => ['login']], function () {
    //学生信息添加页面
	Route::get('/student/add','StudentController@add');
});


// 签到
// 签到试图页面
Route::post('/qiandao/add','QiandaoController@add');

//留言管理

//登录
Route::get('/liuyan/liuyan_login','Liuyan@liuyan_login');
Route::post('/liuyan/do_login','Liuyan@do_login');
Route::get('/liuyan/liuyan','Liuyan@liuyan');
Route::post('liuyan_info','Liuyan@info');



//调用中间件
// Route::group(['middleware' => ['liuyan_login']], function () {
//     //留言
// 	Route::get('/liuyan/liuyan','Liuyan@liuyan');

// });
Route::post('/liuyan/do_liuyan','Liuyan@do_liuyan');
Route::get('/liuyan/list','Liuyan@list');
Route::get('/liuyan/delete','Liuyan@delete');



// ..........
// 1902
// 微信登录
Route::get('/wechat/login','wechat@login');//微信授权登录
Route::get('/wechat/login_do','wechat@login_do');
Route::get('/wechat/code','wechat@code');//接受微信code









//1903微信
// Route::get('wechat/index','WechatController@index');
Route::get('/event/index','EventController@index');

Route::get('/wechat/access_token','wechat@access_token');

Route::get('/wechat/wechat_list','wechat@wechat_list');

// 微信登录
Route::get('/wechat/wechat_login','wechat@wechat_login');

Route::get('/wechat/code','wechat@code');




// 1903微信
Route::get('/login',function(){
    return view('login');
});

Route::get('/wechar_login','LoginController@wechar_login');
Route::get('/wechar_code','LoginController@code');
Route::get('/wechar_index','LoginController@index');

//标签管理

Route::get('/tag_list','TagController@tag_list');
Route::any('/tag_add','TagController@tag_add');
Route::any('/tag_user_add','TagController@tag_user_add'); //给用户打标签
Route::any('/tag_del','TagController@Tag_del');
Route::any('/tag_edit','TagController@Tag_edit');
Route::any('/tag_update','TagController@Tag_update');
Route::any('/tag_user','WecharController@tag_user');
Route::any('/tag_sou','TagController@tag_sou');

Route::any('/event','EventController@event');