<?php
/**
 * PixieMedia_ImageCarousel extension
 *                     NOTICE OF LICENSE
 * 
 *                     This source file is subject to the MIT License
 *                     that is bundled with this package in the file LICENSE.txt.
 *                     It is also available through the world-wide-web at this URL:
 *                     http://opensource.org/licenses/mit-license.php
 * 
 *                     @category  PixieMedia
 *                     @package   PixieMedia_ImageCarousel
 *                     @copyright Copyright (c) 2024
 *                     @license   http://opensource.org/licenses/mit-license.php MIT License
 */
namespace PixieMedia\ImageCarousel\Model\Cimage\Source;

class Alignment implements \Magento\Framework\Option\ArrayInterface
{
    
    /**
     * to option array
     *
     * @return array
     */

    public function toOptionArray()
    {
        $options = [
			[
                 'value' => '',
                 'label' => __('Default')
             ],
            [
                 'value' => 'topleft',
                 'label' => __('Top Left')
             ],
            [
                'value' => 'topcenter',
                'label' => __('Top Center')
            ],
			[
                'value' => 'topright',
                'label' => __('Top Right')
             ],
			[
                'value' => 'centerleft',
                'label' => __('Center Left')
             ],
            [
                'value' => 'center',
                'label' => __('Center')
            ],
			[
                'value' => 'centerright',
                'label' => __('Center Right')
            ],
            
            [
                'value' => 'bottomleft',
                'label' => __('Bottom Left')
            ],
            
            [
                'value' => 'bottomcenter',
                'label' => __('Bottom Center')
            ],
            
            [
                'value' => 'bottomright',
                'label' => __('Bottom Right')
            ]
         
        ];

        return $options;
    }
}
