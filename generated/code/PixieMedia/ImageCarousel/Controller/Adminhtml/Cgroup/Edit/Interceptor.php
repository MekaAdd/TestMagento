<?php
namespace PixieMedia\ImageCarousel\Controller\Adminhtml\Cgroup\Edit;

/**
 * Interceptor class for @see \PixieMedia\ImageCarousel\Controller\Adminhtml\Cgroup\Edit
 */
class Interceptor extends \PixieMedia\ImageCarousel\Controller\Adminhtml\Cgroup\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \PixieMedia\ImageCarousel\Model\CgroupFactory $cgroupFactory, \Magento\Framework\Registry $registry, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($resultPageFactory, $resultJsonFactory, $cgroupFactory, $registry, $context);
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
