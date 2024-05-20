<?php
namespace PixieMedia\ImageCarousel\Block\Adminhtml\Cgroup\Edit\Tab\Cgroup;

/**
 * Interceptor class for @see \PixieMedia\ImageCarousel\Block\Adminhtml\Cgroup\Edit\Tab\Cgroup
 */
class Interceptor extends \PixieMedia\ImageCarousel\Block\Adminhtml\Cgroup\Edit\Tab\Cgroup implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Config\Model\Config\Source\Yesno $booleanOptions, \PixieMedia\ImageCarousel\Model\Cgroup\Source\Slidestoshow $slidestoshowOptions, \PixieMedia\ImageCarousel\Model\Cgroup\Source\Slidestoscroll $slidestoscrollOptions, \PixieMedia\ImageCarousel\Model\Cgroup\Source\Resoneslidestoshow $resoneslidestoshowOptions, \PixieMedia\ImageCarousel\Model\Cgroup\Source\Resoneslidestoscroll $resoneslidestoscrollOptions, \PixieMedia\ImageCarousel\Model\Cgroup\Source\Restwoslidestoshow $restwoslidestoshowOptions, \PixieMedia\ImageCarousel\Model\Cgroup\Source\Restwoslidestoscroll $restwoslidestoscrollOptions, \PixieMedia\ImageCarousel\Model\Cgroup\Source\Resthreeslidestoshow $resthreeslidestoshowOptions, \PixieMedia\ImageCarousel\Model\Cgroup\Source\Resthreeslidestoscroll $resthreeslidestoscrollOptions, \Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($booleanOptions, $slidestoshowOptions, $slidestoscrollOptions, $resoneslidestoshowOptions, $resoneslidestoscrollOptions, $restwoslidestoshowOptions, $restwoslidestoscrollOptions, $resthreeslidestoshowOptions, $resthreeslidestoscrollOptions, $context, $registry, $formFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForm');
        return $pluginInfo ? $this->___callPlugins('getForm', func_get_args(), $pluginInfo) : parent::getForm();
    }
}
