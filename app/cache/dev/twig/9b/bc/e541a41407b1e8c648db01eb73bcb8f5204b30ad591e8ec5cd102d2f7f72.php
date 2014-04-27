<?php

/* AdministrateurAdminBundle::admin_layout.html.twig */
class __TwigTemplate_9bbce541a41407b1e8c648db01eb73bcb8f5204b30ad591e8ec5cd102d2f7f72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'tasks' => array($this, 'block_tasks'),
            'messages' => array($this, 'block_messages'),
            'notifications' => array($this, 'block_notifications'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<!-- Bootstrap -->

<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetsetmag/bs3/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetsetmag/bs3/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetsetmag/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetsetmag/css/atom-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetsetmag/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetsetmag/plugins/PCharts/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetsetmag/plugins/kalendar/kalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
<!--layout-container start-->
<div id=\"layout-container\"> 
  <!--Left navbar start-->
  <div id=\"nav\"> 
    <!--logo start-->
    <div class=\"profile\">
      <div class=\"logo\"><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("jet_set_mag_admin_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetsetmag/images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
    </div><!--logo end--> 
    
    <!--navigation start-->
    <ul class=\"navigation\">
      <li><a href=\"#\"><i class=\"fa fa-home\"></i><span>Dashboard</span></a></li>
      <li class=\"sub\"> <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("article");
        echo "\"><i class=\"fa fa-book\"></i><span>Articles</span></a>
        <ul class=\"navigation-sub\">
          <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i><span>Ajouter</span></a></li>
          <li><a href=\"#\"><i class=\"fa fa-gears\"></i><span>Modifier</span></a></li>
          <li><a href=\"#\"><i class=\"fa fa-eraser\"></i><span>Supprimer</span></a></li>
        </ul>
      </li>
      <li class=\"sub\"> <a href=\"#\"><i class=\"fa fa-calendar-o\"></i><span>Evenements</span></a>
        <ul class=\"navigation-sub\">
          <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i><span>Ajouter</span></a></li>
          <li><a href=\"#\"><i class=\"fa fa-gears\"></i><span>Modifier</span></a></li>
          <li><a href=\"#\"><i class=\"fa fa-eraser\"></i><span>Supprimer</span></a></li>
        </ul>
      </li>
      <li class=\"sub\"> <a href=\"#\"><i class=\"fa fa-film\"></i><span>Films</span></a>
        <ul class=\"navigation-sub\">
          <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i><span>Ajouter</span></a></li>
          <li><a href=\"#\"><i class=\"fa fa-gears\"></i><span>Modifier</span></a></li>
          <li><a href=\"#\"><i class=\"fa fa-eraser\"></i><span>Supprimer</span></a></li>
        </ul>
      </li>
      <li class=\"sub\"> <a href=\"#\"><i class=\"fa fa-video-camera\"></i><span>Projections</span></a>
        <ul class=\"navigation-sub\">
          <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i><span>Ajouter</span></a></li>
          <li><a href=\"#\"><i class=\"fa fa-gears\"></i><span>Modifier</span></a></li>
          <li><a href=\"#\"><i class=\"fa fa-eraser\"></i><span>Supprimer</span></a></li>
        </ul>
      </li>
      <li class=\"sub\"> <a href=\"#\"><i class=\"fa fa-map-marker\"></i><span>Salles Cinema</span></a>
        <ul class=\"navigation-sub\">
          <li><a href=\"#\"><i class=\"fa fa-plus-square\"></i><span>Ajouter</span></a></li>
          <li><a href=\"#\"><i class=\"fa fa-gears\"></i><span>Modifier</span></a></li>
          <li><a href=\"#\"><i class=\"fa fa-eraser\"></i><span>Supprimer</span></a></li>
        </ul>
      </li>
      <li class=\"sub\"> <a href=\"#\"><i class=\"fa fa-comments\"></i><span>Commentaires</span></a>
        <ul class=\"navigation-sub\">
          <li><a href=\"#\"><i class=\"fa fa-gears\"></i><span>Modifier</span></a></li>
          <li><a href=\"#\"><i class=\"fa fa-eraser\"></i><span>Supprimer</span></a></li>
        </ul>
      </li>
      <li class=\"sub\"> <a href=\"#\"><i class=\"fa fa-users\"></i><span>Membres</span></a>
        <ul class=\"navigation-sub\">
          <li><a href=\"#\"><i class=\"fa fa-eraser\"></i><span>Supprimer</span></a></li>
        </ul>
      </li>
      <li class=\"sub\"> <a href=\"#\"><i class=\"fa fa-bar-chart-o\"></i><span>Charts</span></a></li>
      
      
    </ul><!--navigation end--> 
  </div><!--Left navbar end--> 
  

  <div id=\"main\">
    <div class=\"head-title\">
      <div class=\"menu-switch\"><i class=\"fa fa-bars\"></i></div>
      <!--row start-->
      <div class=\"row\"> 
        <!--col-md-12 start-->
        <div class=\"col-md-12\"> 
          <!--profile dropdown start-->
          <ul class=\"user-info pull-right\">
            <li class=\"profile-info dropdown\"> <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"> <img class=\"img-circle\" alt=\"\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetsetmag/images/avatar.jpg"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "</a>
              <ul class=\"dropdown-menu\">
                <li class=\"caret\"></li>
                <li> <a href=\"#\"> <i class=\"fa fa-user\"></i> Edit Profile </a> </li>
                <li> <a href=\"#\"> <i class=\"fa fa-clipboard\"></i> Log Out </a> </li>
              </ul>
            </li>
          </ul><!--profile dropdown end--> 
          
          <!--top nav start-->
          <ul class=\"nav top-menu hidden-xs notify-row\">
            <!--task start-->
            <li class=\"dropdown\"> <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> <i class=\"fa fa-tasks\"></i> <span class=\"badge bg-success\">6</span> </a>
              <ul class=\"dropdown-menu extended tasks-bar\">
                <div class=\"notify-arrow notify-arrow-red\"></div>
                <li>
                  <p class=\"red\">You have 4 pending tasks</p>
                </li>
            
                ";
        // line 118
        $this->displayBlock('tasks', $context, $blocks);
        // line 119
        echo "            
                <li class=\"external\"> <a href=\"#\">See All Tasks</a> </li>
              </ul>
            </li>
            <!--task end--> 
            
            <!--message start-->
            <li class=\"dropdown\" id=\"header_inbox_bar\"> <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> <i class=\"fa fa-envelope-o\"></i> <span class=\"badge bg-important\">5</span> </a>
              <ul class=\"dropdown-menu extended inbox\">
                <div class=\"notify-arrow notify-arrow-red\"></div>
                <li>
                  <p class=\"red\">You have 7 new messages</p>
                </li>
                
                ";
        // line 133
        $this->displayBlock('messages', $context, $blocks);
        // line 134
        echo "                
                <li class=\"external\"> <a href=\"#\">See all messages</a> </li>
              </ul>
            </li><!--message end--> 
            
            <!--notification start-->
            <li class=\"dropdown\" id=\"header_notification_bar\"> <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> <i class=\"fa fa-bell-o\"></i> <span class=\"badge bg-warning\">7</span> </a>
              <ul class=\"dropdown-menu extended notification\">
                <div class=\"notify-arrow notify-arrow-red\"></div>
                <li>
                  <p class=\"red\">You have 3 new notifications</p>
                </li>
                
                ";
        // line 147
        $this->displayBlock('notifications', $context, $blocks);
        // line 148
        echo "                
                <li class=\"external\"> <a href=\"#\">See all notifications</a> </li>
              </ul>
            </li><!--notification end-->
          </ul><!--top nav end--> 
        </div><!--col-md-12 end--> 
      </div><!--row end--> 
    </div>
  
      <!--margin-container start-->
    <div class=\"margin-container\">
    <!--scrollable wrapper start-->
      <div class=\"scrollable wrapper\">
          ";
        // line 161
        $this->displayBlock('content', $context, $blocks);
        // line 162
        echo "      </div><!--scrollable wrapper end--> 
    </div><!--margin-container end--> 
  </div><!--main end--> 
</div><!--layout-container end--> 



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetsetmag/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetsetmag/js/jquery-ui-1.9.1.js"), "html", null, true);
        echo "\"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetsetmag/bs3/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetsetmag/js/smooth-sliding-menu.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetsetmag/js/console-numbering.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetsetmag/js/to-do-admin.js"), "html", null, true);
        echo "\"></script>
";
        // line 177
        $this->displayBlock('scripts', $context, $blocks);
        // line 180
        echo "</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 118
    public function block_tasks($context, array $blocks = array())
    {
    }

    // line 133
    public function block_messages($context, array $blocks = array())
    {
    }

    // line 147
    public function block_notifications($context, array $blocks = array())
    {
    }

    // line 161
    public function block_content($context, array $blocks = array())
    {
    }

    // line 177
    public function block_scripts($context, array $blocks = array())
    {
        // line 178
        echo " 
";
    }

    public function getTemplateName()
    {
        return "AdministrateurAdminBundle::admin_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 178,  311 => 177,  306 => 161,  301 => 147,  296 => 133,  291 => 118,  286 => 16,  281 => 4,  276 => 180,  274 => 177,  270 => 176,  266 => 175,  262 => 174,  258 => 173,  253 => 171,  249 => 170,  239 => 162,  237 => 161,  222 => 148,  220 => 147,  205 => 134,  203 => 133,  185 => 118,  161 => 99,  96 => 37,  85 => 31,  69 => 17,  67 => 16,  62 => 14,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  26 => 1,  199 => 97,  195 => 96,  190 => 95,  187 => 119,  177 => 88,  152 => 65,  137 => 56,  126 => 48,  119 => 44,  113 => 43,  109 => 42,  105 => 41,  101 => 40,  95 => 39,  92 => 38,  88 => 37,  61 => 12,  58 => 13,  52 => 9,  48 => 8,  44 => 7,  40 => 5,  37 => 4,  31 => 4,);
    }
}
