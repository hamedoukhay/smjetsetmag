<?php

/* AdministrateurAdminBundle:Article:index.html.twig */
class __TwigTemplate_05b1acafae1f1307e946953a56d34043ab3f2feea7b482d35cb99883c2b3f9c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AdministrateurAdminBundle::admin_layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdministrateurAdminBundle::admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Admin Dashbord";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "
<!--data-table css-->
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetsetmag/plugins/data-tables/DT_bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetsetmag/plugins/advanced-datatable/css/demo_table.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetsetmag/plugins/advanced-datatable/css/demo_page.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    <h1>Article list</h1>
    
     <div class=\"row\">
        <!--col-md-12 start-->
          <div class=\"col-md-12\">
          <!--box-info start-->
            <div class=\"box-info\">
              <h4>Data Table</h4>
              <hr>
              <!--adv-table start-->
              <div class=\"adv-table\">
                  
        <table  class=\"display table table-bordered table-striped\" id=\"dynamic-table\">
                  <thead>
                    <tr>
                      <th>Titre</th>
                        <th>Texte</th>
                        <th>Notemoy</th>
                        <th>Nbrvisite</th>
                        <th>Dateredaction</th>
                        <th>Id</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 38
            echo "                    <tr class=\"gradeA\">
                        <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "texte"), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "noteMoy"), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbrVisite"), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateRedaction")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateRedaction"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
                        <td>
                            <div>
                                <button class=\"btn btn-group-justified btn-success\" type=\"button\">
                                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
                                        <i style=\"color: white\" class=\"fa fa-eye\"></i>
                                    <span class=\"label\">Show</span>
                                    </a>
                                </button>
                            </div>
                            <div>
                                <button class=\"btn btn-group-justified btn-info\" type=\"button\">
                                    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
                                        <i style=\"color: white\" class=\"fa fa-refresh\"></i>
                                    <span class=\"label\">Edit</span>
                                    </a>
                                </button>
                            </div>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Titre</th>
                        <th>Texte</th>
                        <th>Notemoy</th>
                        <th>Nbrvisite</th>
                        <th>Dateredaction</th>
                        <th>Id</th>
                        <th>Actions</th>
                    </tr>
                  </tfoot>
                </table>
    
              </div><!--adv-table end-->
            </div><!--box-info end-->
          </div><!--col-md-12 end-->
        </div><!--row end-->
        <!--row start-->
    
    
        <ul>
        <li>
            <a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("article_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
";
    }

    // line 94
    public function block_scripts($context, array $blocks = array())
    {
        // line 95
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetsetmag/plugins/data-tables/DT_bootstrap.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetsetmag/plugins/data-tables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetsetmag/plugins/data-tables/dynamic_table_init.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "AdministrateurAdminBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 97,  195 => 96,  190 => 95,  187 => 94,  177 => 88,  152 => 65,  137 => 56,  126 => 48,  119 => 44,  113 => 43,  109 => 42,  105 => 41,  101 => 40,  95 => 39,  92 => 38,  88 => 37,  61 => 12,  58 => 11,  52 => 9,  48 => 8,  44 => 7,  40 => 5,  37 => 4,  31 => 3,);
    }
}
