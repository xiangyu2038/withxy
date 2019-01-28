## withxy laravel的查询ORM 查询插件 

这个插件是针对laravel的关联关系查询进行优化查询 使用此插件需要在熟练使用ORM的基础下使用

### 安装
 ```sh
 composer require xiangyu2038/withxy
 ```
 ### 配置 
 安装完毕后 ,请在基类模型中添加一下代码
 
 ```php
 <?php
 namespace App\Models\Admin;
 use Illuminate\Database\Eloquent\Model;
 use XiangYu2038\WithXy\WithXy;
 
 class BaseModel extends Model
 {
     use WithXy;
 ////////////
}
```

### 使用示例
 ```php
<?php
 $need = [['boxDetail'=>['*'],'box'=>['id','box_sn','stockBox'=>['stock_id','box_sn','stock'=>['stock_sn','id']]]],'stockDetail'=>['stock_id','fashion_code','fashion_size','fashion_num','stock'=>['stock_sn','id']]];
 
 
         $fashion_model = FashionModel::where(function ($query)use($fashion_code){
             $query -> where('code',$fashion_code['fashion_code']);
         })->withxy($need)->get(['code','real_name','school']);
  ```
$need 为一个多维数组 数组的键为要查询的关联数组的关联关系,值为要获取的字段或者是其关联关系 传* 为获取所有的字段  关联关系需要事先在模型中定义好 



 [我的github地址 ](https://github.com/xiangyu2038/).
