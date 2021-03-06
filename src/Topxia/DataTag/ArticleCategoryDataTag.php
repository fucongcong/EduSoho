<?php

namespace Topxia\DataTag;

use Topxia\DataTag\DataTag;

class ArticleCategoryDataTag extends BaseDataTag implements DataTag  
{
    /**
     * 获取资讯栏目
     *
     * 该DataTag返回了栏目的树结构，如只需显示第１级分类，只要循环时加判断depth = 1
     *
     * @param  array $arguments 参数
     * @return array 栏目
     */
    public function getData(array $arguments)
    {   
        return $this->getCategoryService()->getCategoryTree();
    }

    protected function getCategoryService()
    {
        return $this->getServiceKernel()->createService('Article.CategoryService');
    }

}