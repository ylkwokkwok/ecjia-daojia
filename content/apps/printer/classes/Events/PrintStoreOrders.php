<?php
//
//    ______         ______           __         __         ______
//   /\  ___\       /\  ___\         /\_\       /\_\       /\  __ \
//   \/\  __\       \/\ \____        \/\_\      \/\_\      \/\ \_\ \
//    \/\_____\      \/\_____\     /\_\/\_\      \/\_\      \/\_\ \_\
//     \/_____/       \/_____/     \/__\/_/       \/_/       \/_/ /_/
//
//   上海商创网络科技有限公司
//
//  ---------------------------------------------------------------------------------
//
//   一、协议的许可和权利
//
//    1. 您可以在完全遵守本协议的基础上，将本软件应用于商业用途；
//    2. 您可以在协议规定的约束和限制范围内修改本产品源代码或界面风格以适应您的要求；
//    3. 您拥有使用本产品中的全部内容资料、商品信息及其他信息的所有权，并独立承担与其内容相关的
//       法律义务；
//    4. 获得商业授权之后，您可以将本软件应用于商业用途，自授权时刻起，在技术支持期限内拥有通过
//       指定的方式获得指定范围内的技术支持服务；
//
//   二、协议的约束和限制
//
//    1. 未获商业授权之前，禁止将本软件用于商业用途（包括但不限于企业法人经营的产品、经营性产品
//       以及以盈利为目的或实现盈利产品）；
//    2. 未获商业授权之前，禁止在本产品的整体或在任何部分基础上发展任何派生版本、修改版本或第三
//       方版本用于重新开发；
//    3. 如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回并承担相应法律责任；
//
//   三、有限担保和免责声明
//
//    1. 本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的；
//    2. 用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未获得商业授权之前，我们不承
//       诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任；
//    3. 上海商创网络科技有限公司不对使用本产品构建的商城中的内容信息承担责任，但在不侵犯用户隐
//       私信息的前提下，保留以任何方式获取用户信息及商品信息的权利；
//
//   有关本产品最终用户授权协议、商业授权与技术服务的详细内容，均由上海商创网络科技有限公司独家
//   提供。上海商创网络科技有限公司拥有在不事先通知的情况下，修改授权协议的权力，修改后的协议对
//   改变之日起的新授权用户生效。电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和
//   等同的法律效力。您一旦开始修改、安装或使用本产品，即被视为完全理解并接受本协议的各项条款，
//   在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本
//   授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。
//
//  ---------------------------------------------------------------------------------
//

namespace Ecjia\App\Printer\Events;

use Ecjia\App\Printer\EventAbstract;

class PrintStoreOrders extends EventAbstract
{

    protected $code = 'print_store_orders';

    protected $name = '到店购物小票';

    protected $description = '买家确认收货时及时通知商家';

    protected $template = '';

    protected $availableValues = [
        'merchant_name'         => '商家名称',
        'merchant_mobile'       => '商家电话',
        
    	'cashier'           	=> '收银员',
    	'order_sn' 	        	=> '订单编号',
    	'order_trade_no'    	=> '流水编号',
    	'purchase_time'	        => '下单时间',
    	'merchant_address'		=> '商家地址',
    	 
    	'goods_lists' => [
	    	'goods_name'   => '商品',
	    	'goods_number' => '数量',
	    	'goods_amount' => '单价',
    	],
    	'goods_subtotal' => '总计',
    	 
    	'discount_amount'   => '优惠金额',
    	'receivables'       => '应收金额',
    	'payment'		    => '支付宝',
    	'rounding'          => '分头舍去',
    	'order_amount'      => '实收金额',
    	 
    	'tail_content'          => '尾部内容',
    ];
    
    /**
     * 打印测试数据
     * @var array
     */
    protected $demoValues = [
	    'cashier'           	=> '张三',
	    'order_sn' 	        	=> '2017101294860',
	    'order_trade_no'    	=> '201712187341413756',
	    'purchase_time'	        => '2017-10-12 10:00:00',
	    'merchant_address'		=> '上海市普陀区中山北路3553号301室',
	    
	    'goods_lists' => [
			    ['goods_name'   => '乐口事 卢森堡玛奇朵咖啡味牛奶 330ml', 'goods_number' => '3', 'goods_amount' => '5.00'],
			    ['goods_name'   => '爱之鱼 东海小黄鱼（12条装）450g', 'goods_number' => '1', 'goods_amount' => '2.00'],
			    ['goods_name'   => '美国熟冻珍宝蟹（整只）800g以上/只', 'goods_number' => '1', 'goods_amount' => '2.00'],
			    ['goods_name'   => '申扬 农家草鸡蛋 18枚装（6枚*3）', 'goods_number' => '1', 'goods_amount' => '30.00'],
		],
		    
		'goods_subtotal' => '49.00', //商品总计
	    
	    'discount_amount'   => '5.00',
	    'receivables'       => '44.00',
	    'payment'		    => '支付宝',
	    'rounding'          => '0.00',
	    'order_amount'      => '44.00',
	    
	    'qrcode'            => '2017101294860',
    ];
    
    
    public function getTemplate()
    {
        if (empty($this->template)) {
            $this->template = '${print_number}<FS><center>${merchant_name}</center></FS>
<FS><center>${merchant_mobile}</center></FS>
订单编号：${order_sn}
流水编号：${order_trade_no}
下单时间：${purchase_time}
商家地址：${merchant_address}
--------------------------------
${goods_lists}
--------------------------------
优惠金额：-${discount_amount}
应收金额：${receivables}
实收金额：${order_amount}
${payment}：${order_amount}
                            		
<QR>${qrcode}</QR>
${tail_content}';
        }
        return $this->template;
    }
}
