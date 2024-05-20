<?php
namespace PixieMedia\ImageCarousel\Controller\Adminhtml\Cgroup\Delete;

/**
 * Interceptor class for @see \PixieMedia\ImageCarousel\Controller\Adminhtml\Cgroup\Delete
 */
class Interceptor extends \PixieMedia\ImageCarousel\Controller\Adminhtml\Cgroup\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\PixieMedia\ImageCarousel\Model\CgroupFactory $cgroupFactory, \Magento\Framework\Registry $coreRegistry, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($cgroupFactory, $coreRegistry, $context);
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
