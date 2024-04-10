<?php

use FastRoute\RouteCollector;

return [
  '/api' => [
    '/basic' => function (RouteCollector $route) {
        
        // 添加单条
        $route->addRoute(['POST'], '/areas', '/Basic/Areas/save');
        // 删除单条
        $route->addRoute(['POST'], '/areas/delete', '/Basic/Areas/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/areas', '/Basic/Areas/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/car', '/Basic/Car/save');
        // 删除单条
        $route->addRoute(['POST'], '/car/delete', '/Basic/Car/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/car', '/Basic/Car/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/carmodel', '/Basic/CarModel/save');
        // 删除单条
        $route->addRoute(['POST'], '/carmodel/delete', '/Basic/CarModel/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/carmodel', '/Basic/CarModel/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/cdccenter', '/Basic/CdcCenter/save');
        // 删除单条
        $route->addRoute(['POST'], '/cdccenter/delete', '/Basic/CdcCenter/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/cdccenter', '/Basic/CdcCenter/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/depot', '/Basic/Depot/save');
        // 删除单条
        $route->addRoute(['POST'], '/depot/delete', '/Basic/Depot/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/depot', '/Basic/Depot/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/depotrule', '/Basic/DepotRule/save');
        // 删除单条
        $route->addRoute(['POST'], '/depotrule/delete', '/Basic/DepotRule/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/depotrule', '/Basic/DepotRule/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/driver', '/Basic/Driver/save');
        // 删除单条
        $route->addRoute(['POST'], '/driver/delete', '/Basic/Driver/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/driver', '/Basic/Driver/update');


        // 添加单条
        $route->addRoute(['POST'], '/drivertologistics', '/Basic/DriverToLogistics/save');
        // 删除单条
        $route->addRoute(['POST'], '/drivertologistics/delete', '/Basic/DriverToLogistics/delete');

        
        // 添加单条
        $route->addRoute(['POST'], '/express', '/Basic/Express/save');
        // 删除单条
        $route->addRoute(['POST'], '/express/delete', '/Basic/Express/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/express', '/Basic/Express/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/expressstore', '/Basic/ExpressStore/save');
        // 删除单条
        $route->addRoute(['POST'], '/expressstore/delete', '/Basic/ExpressStore/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/expressstore', '/Basic/ExpressStore/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/logistics', '/Basic/Logistics/save');
        // 删除单条
        $route->addRoute(['POST'], '/logistics/delete', '/Basic/Logistics/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/logistics', '/Basic/Logistics/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/organ', '/Basic/Organ/save');
        // 删除单条
        $route->addRoute(['POST'], '/organ/delete', '/Basic/Organ/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/organ', '/Basic/Organ/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/organentity', '/Basic/OrganEntity/save');
        // 删除单条
        $route->addRoute(['POST'], '/organentity/delete', '/Basic/OrganEntity/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/organentity', '/Basic/OrganEntity/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/organuser', '/Basic/OrganUser/save');
        // 删除单条
        $route->addRoute(['POST'], '/organuser/delete', '/Basic/OrganUser/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/organuser', '/Basic/OrganUser/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/owner', '/Basic/Owner/save');
        // 删除单条
        $route->addRoute(['POST'], '/owner/delete', '/Basic/Owner/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/owner', '/Basic/Owner/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/owneraddress', '/Basic/OwnerAddress/save');
        // 删除单条
        $route->addRoute(['POST'], '/owneraddress/delete', '/Basic/OwnerAddress/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/owneraddress', '/Basic/OwnerAddress/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/ownerdepot', '/Basic/OwnerDepot/save');
        // 删除单条
        $route->addRoute(['POST'], '/ownerdepot/delete', '/Basic/OwnerDepot/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/ownerdepot', '/Basic/OwnerDepot/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/product', '/Basic/Product/save');
        // 删除单条
        $route->addRoute(['POST'], '/product/delete', '/Basic/Product/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/product', '/Basic/Product/update');
        

        // 添加单条
        $route->addRoute(['POST'], '/producttotype', '/Basic/ProductToType/save');
        // 删除单条
        $route->addRoute(['POST'], '/producttotype/delete', '/Basic/ProductToType/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/producttotype', '/Basic/ProductToType/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/producttype', '/Basic/ProductType/save');
        // 删除单条
        $route->addRoute(['POST'], '/producttype/delete', '/Basic/ProductType/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/producttype', '/Basic/ProductType/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/productunit', '/Basic/ProductUnit/save');
        // 删除单条
        $route->addRoute(['POST'], '/productunit/delete', '/Basic/ProductUnit/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/productunit', '/Basic/ProductUnit/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/productunitname', '/Basic/ProductUnitName/save');
        // 删除单条
        $route->addRoute(['POST'], '/productunitname/delete', '/Basic/ProductUnitName/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/productunitname', '/Basic/ProductUnitName/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/rbacdriver', '/Basic/RbacDriver/save');
        // 删除单条
        $route->addRoute(['POST'], '/rbacdriver/delete', '/Basic/RbacDriver/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/rbacdriver', '/Basic/RbacDriver/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/rbacgroup', '/Basic/RbacGroup/save');
        // 删除单条
        $route->addRoute(['POST'], '/rbacgroup/delete', '/Basic/RbacGroup/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/rbacgroup', '/Basic/RbacGroup/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/rbacgrouprole', '/Basic/RbacGroupRole/save');
        // 删除单条
        $route->addRoute(['POST'], '/rbacgrouprole/delete', '/Basic/RbacGroupRole/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/rbacgrouprole', '/Basic/RbacGroupRole/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/rbacmenu', '/Basic/RbacMenu/save');
        // 删除单条
        $route->addRoute(['POST'], '/rbacmenu/delete', '/Basic/RbacMenu/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/rbacmenu', '/Basic/RbacMenu/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/rbacowner', '/Basic/RbacOwner/save');
        // 删除单条
        $route->addRoute(['POST'], '/rbacowner/delete', '/Basic/RbacOwner/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/rbacowner', '/Basic/RbacOwner/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/rbacrole', '/Basic/RbacRole/save');
        // 删除单条
        $route->addRoute(['POST'], '/rbacrole/delete', '/Basic/RbacRole/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/rbacrole', '/Basic/RbacRole/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/rbacrolemenu', '/Basic/RbacRoleMenu/save');
        // 删除单条
        $route->addRoute(['POST'], '/rbacrolemenu/delete', '/Basic/RbacRoleMenu/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/rbacrolemenu', '/Basic/RbacRoleMenu/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/rbacstore', '/Basic/RbacStore/save');
        // 删除单条
        $route->addRoute(['POST'], '/rbacstore/delete', '/Basic/RbacStore/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/rbacstore', '/Basic/RbacStore/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/rbacuser', '/Basic/RbacUser/save');
        // 删除单条
        $route->addRoute(['POST'], '/rbacuser/delete', '/Basic/RbacUser/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/rbacuser', '/Basic/RbacUser/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/rbacuserdepot', '/Basic/RbacUserDepot/save');
        // 删除单条
        $route->addRoute(['POST'], '/rbacuserdepot/delete', '/Basic/RbacUserDepot/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/rbacuserdepot', '/Basic/RbacUserDepot/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/rbacusergroup', '/Basic/RbacUserGroup/save');
        // 删除单条
        $route->addRoute(['POST'], '/rbacusergroup/delete', '/Basic/RbacUserGroup/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/rbacusergroup', '/Basic/RbacUserGroup/update');
        

        // 添加单条
        $route->addRoute(['POST'], '/store', '/Basic/Store/save');
        // 删除单条
        $route->addRoute(['POST'], '/store/delete', '/Basic/Store/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/store', '/Basic/Store/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/storeaddress', '/Basic/StoreAddress/save');
        // 删除单条
        $route->addRoute(['POST'], '/storeaddress/delete', '/Basic/StoreAddress/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/storeaddress', '/Basic/StoreAddress/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/storedeliveryrule', '/Basic/StoreDeliveryRule/save');
        // 删除单条
        $route->addRoute(['POST'], '/storedeliveryrule/delete', '/Basic/StoreDeliveryRule/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/storedeliveryrule', '/Basic/StoreDeliveryRule/update');
        
        
        // 添加单条
        $route->addRoute(['POST'], '/storedepot', '/Basic/StoreDepot/save');
        // 删除单条
        $route->addRoute(['POST'], '/storedepot/delete', '/Basic/StoreDepot/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/storedepot', '/Basic/StoreDepot/update');


        // 添加单条
        $route->addRoute(['POST'], '/depotareas', '/Basic/DepotAreas/save');
        // 删除单条
        $route->addRoute(['POST'], '/depotareas/delete', '/Basic/DepotAreas/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/depotareas/{id:\d+}', '/Basic/DepotAreas/update');


        // 添加单条
        $route->addRoute(['POST'], '/ownerinvoiceaddress', '/Basic/OwnerInvoiceAddress/save');
        // 删除单条
        $route->addRoute(['POST'], '/ownerinvoiceaddress/delete', '/Basic/OwnerInvoiceAddress/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/ownerinvoiceaddress', '/Basic/OwnerInvoiceAddress/update');


        // 添加单条
        $route->addRoute(['POST'], '/ownertoinvoiceaddress', '/Basic/OwnerToInvoiceAddress/save');
        // 删除单条
        $route->addRoute(['POST'], '/ownertoinvoiceaddress/delete', '/Basic/OwnerToInvoiceAddress/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/ownertoinvoiceaddress', '/Basic/OwnerToInvoiceAddress/update');


        // 添加单条
        $route->addRoute(['POST'], '/ownersupplier', '/Basic/OwnerSupplier/save');
        // 删除单条
        $route->addRoute(['POST'], '/ownersupplier/delete', '/Basic/OwnerSupplier/delete');
        // 修改单条
        $route->addRoute(['PUT'], '/ownersupplier', '/Basic/OwnerSupplier/update');

        // 添加单条
        $route->addRoute(['POST'], '/paydepotfee', '/Basic/PayDepotFee/save');
        // 修改单条
        $route->addRoute(['PUT'], '/paydepotfee', '/Basic/PayDepotFee/update');

        // 添加单条
        $route->addRoute(['POST'], '/receivedepotfee', '/Basic/ReceiveDepotFee/save');
        // 修改单条
        $route->addRoute(['PUT'], '/receivedepotfee', '/Basic/ReceiveDepotFee/update');

        // 添加单条
        $route->addRoute(['POST'], '/supplierdepotfee', '/Basic/SupplierDepotFee/save');
        // 修改单条
        $route->addRoute(['PUT'], '/supplierdepotfee', '/Basic/SupplierDepotFee/update');
    },
  ]
];
