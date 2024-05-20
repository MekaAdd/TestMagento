<?php
namespace PixieMedia\ImageCarousel\Controller\Adminhtml\Cimage\Save;

/**
 * Interceptor class for @see \PixieMedia\ImageCarousel\Controller\Adminhtml\Cimage\Save
 */
class Interceptor extends \PixieMedia\ImageCarousel\Controller\Adminhtml\Cimage\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\PixieMedia\ImageCarousel\Model\Upload $uploadModel, \PixieMedia\ImageCarousel\Model\Cimage\Image $imageModel, \PixieMedia\ImageCarousel\Model\CimageFactory $cimageFactory, \Magento\Framework\Registry $registry, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($uploadModel, $imageModel, $cimageFactory, $registry, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
