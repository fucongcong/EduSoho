<?php

namespace Topxia\DataTag\Test;

use Topxia\Service\Common\BaseTestCase;
use Topxia\DataTag\TopRatingCourseReviewsDataTag;

class TopRatingCourseReviewsDataTagTest extends BaseTestCase
{   

    public function testGetData()
    {
        $datatag = new TopRatingCourseReviewsDataTag();
        $datatag->getData(array('courseId' => 1, 'count' => 5));

    }

}