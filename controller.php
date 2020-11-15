        <?php
            include_once('entities/Client.php');
            include_once('routes/RegisterRoute.php');
            include_once('routes/ListClientsRoute.php');
            include_once('routes/CatalogRoute.php');
            include_once('views/ClientView.php');
            include_once('views/ClientListView.php');
            include_once('views/CatalogView.php');
            include_once('others/RegistrationForm.php');

            
            $code = $_REQUEST['action'];
            switch($code){
                case 1: //register
                    $form = new RegistrationForm();

                    $action = new RegisterRoute();
                    $client = $action->execute($form);

                    $view = new ClientView();
                    $view->diplay($client);
                    break;
                case 2://select all clients
                    $action = new ListClientsRoute();
                    $list = $action->execute();

                    $view = new ClientListView();
                    $view->diplay($list);
                    break;
                case 3://display catalog
                    $action = new CatalogRoute();
                    $list = $action->execute();

                    $view = new CatalogView();
                    $view->diplay($list);
                break;
                case 4://client details
                        $action = new ClientDetailsRoute();
                        $client = $action->execute();
    
                        $view = new ClientView();
                        $view->diplay($client);
                    break;
                    case 5://article details
                        $action = new ArticleDetailsRoute();
                        $product = $action->execute();
    
                        $view = new ProductView();
                        $view->diplay($product);
                    break;
                    case 6://add to cart
                        $action = new AddCartRoute();
                        $cart = $action->execute();
    
                        $view = new CartView();
                        $view->diplay($cart);
                    break;
                    case 7://remove to cart
                        $action = new RemoveCartRoute();
                        $cart = $action->execute();
    
                        $view = new CartView();
                        $view->diplay($cart);
                    break;
                    case 8://remove to cart
                        $action = new ModifyCartRoute();
                        $cart = $action->execute();
    
                        $view = new CartView();
                        $view->diplay($cart);
                    break;
                    case 9://remove to cart
                        $action = new EmptyCartRoute();
                        $cart = $action->execute();
    
                        $view = new CartView();
                        $view->diplay($cart);
                    break;
              default:
                    header("/views/error.php");
                    exit;
            }


        ?>
