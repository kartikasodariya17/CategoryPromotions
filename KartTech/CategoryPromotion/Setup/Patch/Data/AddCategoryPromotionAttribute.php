<?php

namespace KartTech\CategoryPromotion\Setup\Patch\Data;

use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;
use Magento\Eav\Setup\EavSetup;
use Magento\Catalog\Model\Category;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
/**
 * Class AddCategoryPromotionAttribute for Create Category Promotions Attribute using Data Patch.
 */
class AddCategoryPromotionAttribute implements DataPatchInterface 
{
    /**
     * ModuleDataSetupInterface
     *
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    /**
     * EavSetupFactory
     *
     * @var EavSetupFactory
     */
    private $eavSetupFactory;

    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param EavSetupFactory          $eavSetupFactory
     */

    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        EavSetupFactory $eavSetupFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->eavSetupFactory = $eavSetupFactory;
    }
    
    /**
     * {@inheritdoc}
     */
    public function apply() {
        /** @var EavSetup $eavSetup */
        $eavSetup = $this->eavSetupFactory->create(['setup' => $this->moduleDataSetup]);

        /* Create Promotion Title Attribute */
        $eavSetup->addAttribute(Category::ENTITY, 'promotions_title', [
            'type' => 'text',
            'label' => 'Title',
            'input' => 'text',
            'required' => false,
            'global' => ScopedAttributeInterface::SCOPE_STORE,
            'is_user_defined' => true,
            'visible' => true,
            'group' => 'Promotion',
        ]);

        /* Create Promotion SubTitle Attribute */
        $eavSetup->addAttribute(Category::ENTITY, 'promotions_subtitle', [
            'type' => 'text',
            'label' => 'Subtitle',
            'input' => 'text',
            'required' => false,
            'global' => ScopedAttributeInterface::SCOPE_STORE,
            'is_user_defined' => true,
            'visible' => true,
            'group' => 'Promotion',
        ]);

        /* Create Promotion Action URL Attribute */
        $eavSetup->addAttribute(Category::ENTITY, 'promotions_actionurl', [
            'type' => 'text',
            'label' => 'Action URL',
            'input' => 'text',
            'required' => false,
            'global' => ScopedAttributeInterface::SCOPE_STORE,
            'is_user_defined' => true,
            'visible' => true,
            'group' => 'Promotion',
        ]);

        /* Create Promotion Action Title Attribute */
        $eavSetup->addAttribute(Category::ENTITY, 'promotions_actiontitle', [
            'type' => 'text',
            'label' => 'Action Title',
            'input' => 'text',
            'required' => false,
            'global' => ScopedAttributeInterface::SCOPE_STORE,
            'is_user_defined' => true,
            'visible' => true,
            'group' => 'Promotion',
        ]);

        /* Create Promotion Promo Type Attribute */
        $eavSetup->addAttribute(Category::ENTITY, 'promotions_promotype', [
            'type' => 'text',
            'label' => 'Promo Type',
            'input' => 'text',
            'required' => false,
            'global' => ScopedAttributeInterface::SCOPE_STORE,
            'is_user_defined' => true,
            'visible' => true,
            'group' => 'Promotion',
        ]);

        /* Create Promotion Background color picker Attribute */
        $eavSetup->addAttribute(Category::ENTITY, 'promotions_bg_color', [
            'type' => 'text',
            'label' => 'Bg Color',
            'input' => 'text',
            'required' => false,
            'global' => ScopedAttributeInterface::SCOPE_STORE,
            'is_user_defined' => true,
            'visible' => true,
            'group' => 'Promotion',
        ]);

        /* Create Promotion Text color picker Attribute */
        $eavSetup->addAttribute(Category::ENTITY, 'promotions_text_color', [
            'type' => 'text',
            'label' => 'Text Color',
            'input' => 'text',
            'required' => false,
            'global' => ScopedAttributeInterface::SCOPE_STORE,
            'is_user_defined' => true,
            'visible' => true,
            'group' => 'Promotion',
        ]);
    }
    /**
     * {@inheritdoc}
     */
    public static function getDependencies() {
        return [];
    }
    /**
     * {@inheritdoc}
     */
    public function getAliases() {
        return [];
    }
}