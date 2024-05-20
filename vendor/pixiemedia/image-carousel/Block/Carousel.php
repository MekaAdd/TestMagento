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
 *                     @copyright Copyright (c) 2021
 *                     @license   http://opensource.org/licenses/mit-license.php MIT License
 */
namespace PixieMedia\ImageCarousel\Block;
use Magento\Framework\View\Element\Template\Context;

class Carousel extends \Magento\Framework\View\Element\Template implements \Magento\Widget\Block\BlockInterface
{
    
    public function __construct(
	    Context $context,
        \Magento\Framework\Image\AdapterFactory $imageFactory,
		\PixieMedia\ImageCarousel\Model\Cgroup $cGroup,
		\PixieMedia\ImageCarousel\Model\ResourceModel\Cimage\CollectionFactory $cImage
		
    )
    {
        parent::__construct($context);
        $this->_imageFactory = $imageFactory;
		$this->cGroup = $cGroup;
		$this->cImage = $cImage;
		
    }
	
	public function _toHtml()
    {
		
		$template = ($this->getData('template'))?$this->getData('template'):'PixieMedia_ImageCarousel::carousel.phtml';
		
		$this->setTemplate(
            $template
        );

        
        return \Magento\Framework\View\Element\Template::_toHtml();
    }
	
	public function getGroup($cid) {
		$group = $this->cGroup->load($cid);
		if($group) { return $group; }
		return false;
	}
	
	
	public function carouselimages($cid) {
		
		$imageCollection = $this->cImage->create()
					->addFieldToFilter('cgroup_id',$cid)
					->addFieldToFilter('status',1)
	    			->setOrder('sort', 'ASC');
		
		$imageCollection->getSelect()->order('CAST(`sort` AS SIGNED) ASC');
		
		return $imageCollection; 
	}

  
	public function resize($image, $width = null, $height = null, $crop = false, $path = false,$quality = 100)
    {
		
		if(!$image) { return false; }
		
		
        $absolutePath = $this->_filesystem->getDirectoryRead(\Magento\Framework\App\Filesystem\DirectoryList::MEDIA)->getAbsolutePath('pixiemedia/imagecarousel/cimage/image').$image;

        $imageResized =  $this->_filesystem->getDirectoryRead(\Magento\Framework\App\Filesystem\DirectoryList::MEDIA)->getAbsolutePath('resized/'.$width.'_'.$height.'').$image; 
		
		if (file_exists($imageResized)) { return $resizedURL = $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA).'resized/'.$path.$width.'_'.$height.''.$image; }
		
		if(!file_exists($absolutePath)) { return false; }
		
        // Crete the Image Factory...
        $imageResize = $this->_imageFactory->create();         
        $imageResize->open($absolutePath);
        $imageResize->constrainOnly(false);         
        $imageResize->keepTransparency(TRUE);         
        $imageResize->keepFrame(TRUE);         
        $imageResize->keepAspectRatio(TRUE); 
		$imageResize->quality($quality);
		
		$orig_width  = $imageResize->getOriginalWidth();
		$orig_height = $imageResize->getOriginalHeight();
		$new_ratio   = $width / $height;
		$orig_ratio  = $orig_width / $orig_height;
		$new_height  = $height;
		$new_width   = $width;

		  // Correct aspect ratio
		  if($orig_ratio > $new_ratio){
			  
			$temp_width     = round($orig_ratio * $new_height);
			$tmp_constrain  = true;
			$imageResize->constrainOnly(false);
			$imageResize->resize($temp_width, $new_height);
			$imageResize->constrainOnly($tmp_constrain);
			$crop_amount    = floor(($temp_width - $new_width) / 2);
			$crop_remainder = ($temp_width - $new_width) % 2;

			$imageResize->crop(0, $crop_amount + $crop_remainder, $crop_amount, 0);
			  
		  } else {
			  
			$temp_height    = round((1 / $orig_ratio) * $new_width);
			$tmp_constrain  = true;
			$imageResize->constrainOnly(false);
			$imageResize->resize($new_width, $temp_height);
			$imageResize->constrainOnly($tmp_constrain);
			  
			  
			$crop_amount    = floor(($temp_height - $new_height) / 2);
			$crop_remainder = ($temp_height - $new_height) % 2;
			$imageResize->crop($crop_amount + $crop_remainder, 0, 0, $crop_amount);

        }

                       
        $destination = $imageResized;   
        $imageResize->save($destination);         

        $resizedURL = $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA).'resized/'.$width.'_'.$height.''.$image;
		
        return $resizedURL;
  } 

  public function getSvg($width,$height,$wrapclass, $bg = 'rgb(255,255,255)') {
		
		$svgHtml = '';
		
		if($wrapclass) {
			$svgHtml .= '<div class="svg-hold-pmcarousel '.$wrapclass.'">';
		}
		$svgHtml .= '<svg width="'.$width.'" height="'.$height.'"><rect width="'.$width.'" height="'.$height.'" style="fill:'.$bg.';stroke-width:0;" /></svg>';
		if($wrapclass) {
			$svgHtml .= '</div>';
		}
		
		return $svgHtml;
	}
	
	
}