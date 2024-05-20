<?php
namespace PixieMedia\ImageCarousel\Block\Adminhtml\Cimage\Edit\Tab\Cimage;

/**
 * Interceptor class for @see \PixieMedia\ImageCarousel\Block\Adminhtml\Cimage\Edit\Tab\Cimage
 */
class Interceptor extends \PixieMedia\ImageCarousel\Block\Adminhtml\Cimage\Edit\Tab\Cimage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Config\Model\Config\Source\Yesno $booleanOptions, \PixieMedia\ImageCarousel\Model\Source\Cgroup $cgroupSourceModel, \Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig, \PixieMedia\ImageCarousel\Model\Cimage\Source\Alignment $aligmentOptions, array $data = [])
    {
        $this->___init();
        parent::__construct($booleanOptions, $cgroupSourceModel, $context, $registry, $formFactory, $wysiwygConfig, $aligmentOptions, $data);
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
