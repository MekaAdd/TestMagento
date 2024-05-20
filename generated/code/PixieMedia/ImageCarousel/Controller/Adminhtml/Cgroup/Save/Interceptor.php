<?php
namespace PixieMedia\ImageCarousel\Controller\Adminhtml\Cgroup\Save;

/**
 * Interceptor class for @see \PixieMedia\ImageCarousel\Controller\Adminhtml\Cgroup\Save
 */
class Interceptor extends \PixieMedia\ImageCarousel\Controller\Adminhtml\Cgroup\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\PixieMedia\ImageCarousel\Model\CgroupFactory $cgroupFactory, \Magento\Framework\Registry $registry, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($cgroupFactory, $registry, $context);
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
