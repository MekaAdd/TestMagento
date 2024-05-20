<?php
namespace MyModule\HelloWorld\Controller\Index\Index;

/**
 * Interceptor class for @see \MyModule\HelloWorld\Controller\Index\Index
 */
class Interceptor extends \MyModule\HelloWorld\Controller\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\RequestInterface $request, \Magento\Framework\View\Result\PageFactory $pageFactory, \MyModule\HelloWorld\Helper\Data $helperData, \MyModule\HelloWorld\Model\ResourceModel\Post\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($request, $pageFactory, $helperData, $collectionFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
