<?php

/* @Product/ProductPage/Panels/combinations.html.twig */
class __TwigTemplate_36c556f7c0362c920870016180a5be4b6fa2bcf11faf904e6894ed1b01635e05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/ProductPage/Panels/combinations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/ProductPage/Panels/combinations.html.twig"));

        // line 25
        echo "<div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step3\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"container-fluid\">
        <div class=\"row\">

          <div class=\"col-md-12\">

            <div id=\"quantities\" style=\"";
        // line 33
        if ((($context["has_combinations"] ?? $this->getContext($context, "has_combinations")) || ($this->getAttribute($this->getAttribute(($context["formDependsOnStocks"] ?? $this->getContext($context, "formDependsOnStocks")), "vars", array()), "value", array()) != "0"))) {
            echo "display: none;";
        }
        echo "\">
              <h2>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantities", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
              <fieldset class=\"form-group\">
                <div class=\"row\">
                  ";
        // line 37
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 38
            echo "                    <div class=\"col-md-4\">
                      <label class=\"form-control-label\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["formStockQuantity"] ?? $this->getContext($context, "formStockQuantity")), "vars", array()), "label", array()), "html", null, true);
            echo "</label>
                      ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formStockQuantity"] ?? $this->getContext($context, "formStockQuantity")), 'errors');
            echo "
                      ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formStockQuantity"] ?? $this->getContext($context, "formStockQuantity")), 'widget');
            echo "
                    </div>
                  ";
        }
        // line 44
        echo "                  <div class=\"col-md-4\">
                    <label class=\"form-control-label\">";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["formStockMinimalQuantity"] ?? $this->getContext($context, "formStockMinimalQuantity")), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                    <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formStockMinimalQuantity"] ?? $this->getContext($context, "formStockMinimalQuantity")), 'errors');
        echo "
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formStockMinimalQuantity"] ?? $this->getContext($context, "formStockMinimalQuantity")), 'widget');
        echo "
                  </div>
                </div>
              </fieldset>

              <h2>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stock", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
              <fieldset class=\"form-group\">
                <div class=\"row\">
                  <div class=\"col-md-4\">
                    <label class=\"form-control-label\">";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["formLocation"] ?? $this->getContext($context, "formLocation")), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formLocation"] ?? $this->getContext($context, "formLocation")), 'errors');
        echo "
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formLocation"] ?? $this->getContext($context, "formLocation")), 'widget');
        echo "
                  </div>
                </div>
                <div class=\"row\">
                  <div class=\"col-md-4\">
                    <label class=\"form-control-label\">";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["formLowStockThreshold"] ?? $this->getContext($context, "formLowStockThreshold")), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formLowStockThreshold"] ?? $this->getContext($context, "formLowStockThreshold")), 'errors');
        echo "
                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formLowStockThreshold"] ?? $this->getContext($context, "formLowStockThreshold")), 'widget');
        echo "
                  </div>
                  <div class=\"col-md-8\">
                    <label class=\"form-control-label\">&nbsp;</label>
                    <div class=\"widget-checkbox-inline\">
                      ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formLowStockAlert"] ?? $this->getContext($context, "formLowStockAlert")), 'errors');
        echo "
                      ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formLowStockAlert"] ?? $this->getContext($context, "formLowStockAlert")), 'widget');
        echo "
                      <span class=\"help-box\" data-toggle=\"popover\" data-html=\"true\" data-content=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to [1]Advanced Parameters > Team[/1]", array("[1]" => (("<a href=&quot;" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminEmployees")) . "&quot;>"), "[/1]" => "</a>"), "Admin.Catalog.Help");
        echo "\" ></span>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>

            <div id=\"virtual_product\" data-action=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_virtual_save_action", array("idProduct" => ($context["productId"] ?? $this->getContext($context, "productId")))), "html", null, true);
        echo "\" data-action-remove=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_virtual_remove_action", array("idProduct" => ($context["productId"] ?? $this->getContext($context, "productId")))), "html", null, true);
        echo "\">

              <div class=\"row\">
                <div class=\"col-md-4\">
                  <h2>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "vars", array()), "label", array()), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"col-md-8\">
                  <fieldset class=\"form-group\">
                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "is_virtual_file", array()), 'widget');
        echo "
                  </fieldset>
                </div>
              </div>

              <div id=\"virtual_product_content\" class=\"row col-md-8\">
                ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), 'errors');
        echo "
                <div class=\"col-md-12\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "file", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                    <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upload a file from your computer (%maxUploadSize% max.)", array("%maxUploadSize%" => ($context["max_upload_size"] ?? $this->getContext($context, "max_upload_size"))), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                    <div id=\"form_step3_virtual_product_file_input\" class=\"";
        // line 101
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "filename", array(), "any", true, true)) ? ("hide") : ("show"));
        echo "\">
                      ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "file", array()), 'widget');
        echo "
                    </div>
                    <div id=\"form_step3_virtual_product_file_details\" class=\"";
        // line 104
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "filename", array(), "any", true, true)) ? ("show") : ("hide"));
        echo "\">
                      <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "file_download_link", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "vars", array()), "value", array()), "file_download_link", array())) : ("")), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm download\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download file", array(), "Admin.Actions"), "html", null, true);
        echo "</a>
                      <a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_virtual_remove_file_action", array("idProduct" => ($context["productId"] ?? $this->getContext($context, "productId")))), "html", null, true);
        echo "\" class=\"btn btn-danger btn-sm delete\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete this file", array(), "Admin.Actions"), "html", null, true);
        echo "</a>
                    </div>
                  </fieldset>
                </div>
                <div class=\"col-md-6\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "name", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                    <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The full filename with its extension (e.g. Book.pdf)", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                    ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "name", array()), 'errors');
        echo "
                    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "name", array()), 'widget');
        echo "
                  </fieldset>
                </div>
                <div class=\"col-md-6\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "nb_downloadable", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                    <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number of downloads allowed per customer. Set to 0 for unlimited downloads.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                    ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "nb_downloadable", array()), 'errors');
        echo "
                    ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "nb_downloadable", array()), 'widget');
        echo "
                  </fieldset>
                </div>
                <div class=\"col-md-6\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "expiration_date", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                    <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If set, the file will not be downloadable after this date. Leave blank if you do not wish to attach an expiration date.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "expiration_date", array()), 'errors');
        echo "
                    ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "expiration_date", array()), 'widget');
        echo "
                  </fieldset>
                </div>
                <div class=\"col-md-6\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "nb_days", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                    <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number of days this file can be accessed by customers. Set to zero for unlimited access.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "nb_days", array()), 'errors');
        echo "
                    ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "nb_days", array()), 'widget');
        echo "
                  </fieldset>
                </div>
                <div class=\"col-md-12\">
                  ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formVirtualProduct"] ?? $this->getContext($context, "formVirtualProduct")), "save", array()), 'widget');
        echo "
                </div>
              </div>
            </div>

            ";
        // line 152
        if ((($context["asm_globally_activated"] ?? $this->getContext($context, "asm_globally_activated")) && ($this->getAttribute($this->getAttribute(($context["formType"] ?? $this->getContext($context, "formType")), "vars", array()), "value", array()) != "2"))) {
            // line 153
            echo "              <div class=\"form-group\" id=\"asm_quantity_management\">
                <label class=\"col-sm-2 control-label\" for=\"form_step3_advanced_stock_management\"></label>
                <div class=\"col-sm-10\">
                  ";
            // line 156
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formAdvancedStockManagement"] ?? $this->getContext($context, "formAdvancedStockManagement")), 'errors');
            echo "
                  ";
            // line 157
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formAdvancedStockManagement"] ?? $this->getContext($context, "formAdvancedStockManagement")), 'widget');
            echo "
                  ";
            // line 158
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "type_product", array()), "vars", array()), "value", array()) == "1")) {
                // line 159
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When enabling advanced stock management for a pack, please make sure it is also enabled for its product(s) – if you choose to decrement product quantities.", array(), "Admin.Catalog.Notification"), "html", null, true);
                echo "
                  ";
            }
            // line 161
            echo "                </div>
              </div>
              <div class=\"form-group\" id=\"depends_on_stock_div\" style=\"";
            // line 163
            if ( !$this->getAttribute($this->getAttribute(($context["formAdvancedStockManagement"] ?? $this->getContext($context, "formAdvancedStockManagement")), "vars", array()), "checked", array())) {
                echo "display: none;";
            }
            echo "\">
                <label class=\"col-sm-2 control-label\" for=\"form_step3_depends_on_stock\"></label>
                <div class=\"col-sm-10\">
                  ";
            // line 166
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formDependsOnStocks"] ?? $this->getContext($context, "formDependsOnStocks")), 'errors');
            echo "
                  ";
            // line 167
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formDependsOnStocks"] ?? $this->getContext($context, "formDependsOnStocks")), 'widget');
            echo "
                </div>
              </div>
            ";
        }
        // line 171
        echo "            ";
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 172
            echo "              <div id=\"pack_stock_type\">
                <h2>";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["formPackStockType"] ?? $this->getContext($context, "formPackStockType")), "vars", array()), "label", array()), "html", null, true);
            echo "</h2>
                <div class=\"row col-md-4\">
                  <fieldset class=\"form-group\">
                    ";
            // line 176
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formPackStockType"] ?? $this->getContext($context, "formPackStockType")), 'errors');
            echo "
                    ";
            // line 177
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formPackStockType"] ?? $this->getContext($context, "formPackStockType")), 'widget');
            echo "
                  </fieldset>
                </div>
              </div>
            ";
        }
        // line 182
        echo "            ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_combinations.html.twig", array("form" => ($context["formStep3"] ?? $this->getContext($context, "formStep3")), "form_combination_bulk" => ($context["formCombinations"] ?? $this->getContext($context, "formCombinations"))));
        echo "

            ";
        // line 184
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsQuantitiesStepBottom", array("id_product" => ($context["productId"] ?? $this->getContext($context, "productId"))));
        echo "

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Panels/combinations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 184,  378 => 182,  370 => 177,  366 => 176,  360 => 173,  357 => 172,  354 => 171,  347 => 167,  343 => 166,  335 => 163,  331 => 161,  325 => 159,  323 => 158,  319 => 157,  315 => 156,  310 => 153,  308 => 152,  300 => 147,  293 => 143,  289 => 142,  285 => 141,  280 => 139,  272 => 134,  268 => 133,  264 => 132,  259 => 130,  251 => 125,  247 => 124,  243 => 123,  238 => 121,  230 => 116,  226 => 115,  222 => 114,  217 => 112,  206 => 106,  200 => 105,  196 => 104,  191 => 102,  187 => 101,  183 => 100,  178 => 98,  172 => 95,  163 => 89,  156 => 85,  147 => 81,  137 => 74,  133 => 73,  129 => 72,  121 => 67,  117 => 66,  113 => 65,  105 => 60,  101 => 59,  97 => 58,  90 => 54,  82 => 49,  78 => 48,  74 => 47,  69 => 45,  66 => 44,  60 => 41,  56 => 40,  52 => 39,  49 => 38,  47 => 37,  41 => 34,  35 => 33,  25 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
<div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step3\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"container-fluid\">
        <div class=\"row\">

          <div class=\"col-md-12\">

            <div id=\"quantities\" style=\"{% if has_combinations or formDependsOnStocks.vars.value != \"0\" %}display: none;{% endif %}\">
              <h2>{{ 'Quantities'|trans({}, 'Admin.Catalog.Feature') }}</h2>
              <fieldset class=\"form-group\">
                <div class=\"row\">
                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                    <div class=\"col-md-4\">
                      <label class=\"form-control-label\">{{ formStockQuantity.vars.label }}</label>
                      {{ form_errors(formStockQuantity) }}
                      {{ form_widget(formStockQuantity) }}
                    </div>
                  {% endif %}
                  <div class=\"col-md-4\">
                    <label class=\"form-control-label\">{{ formStockMinimalQuantity.vars.label }}</label>
                    <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"{{ \"The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                    {{ form_errors(formStockMinimalQuantity) }}
                    {{ form_widget(formStockMinimalQuantity) }}
                  </div>
                </div>
              </fieldset>

              <h2>{{ 'Stock'|trans({}, 'Admin.Catalog.Feature') }}</h2>
              <fieldset class=\"form-group\">
                <div class=\"row\">
                  <div class=\"col-md-4\">
                    <label class=\"form-control-label\">{{ formLocation.vars.label }}</label>
                    {{ form_errors(formLocation) }}
                    {{ form_widget(formLocation) }}
                  </div>
                </div>
                <div class=\"row\">
                  <div class=\"col-md-4\">
                    <label class=\"form-control-label\">{{ formLowStockThreshold.vars.label }}</label>
                    {{ form_errors(formLowStockThreshold) }}
                    {{ form_widget(formLowStockThreshold) }}
                  </div>
                  <div class=\"col-md-8\">
                    <label class=\"form-control-label\">&nbsp;</label>
                    <div class=\"widget-checkbox-inline\">
                      {{ form_errors(formLowStockAlert) }}
                      {{ form_widget(formLowStockAlert) }}
                      <span class=\"help-box\" data-toggle=\"popover\" data-html=\"true\" data-content=\"{{ \"The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to [1]Advanced Parameters > Team[/1]\"|trans({'[1]':'<a href=&quot;'~getAdminLink(\"AdminEmployees\")~'&quot;>','[/1]':'</a>'}, 'Admin.Catalog.Help')|raw }}\" ></span>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>

            <div id=\"virtual_product\" data-action=\"{{ path('admin_product_virtual_save_action', { 'idProduct': productId }) }}\" data-action-remove=\"{{ path('admin_product_virtual_remove_action', {'idProduct': productId }) }}\">

              <div class=\"row\">
                <div class=\"col-md-4\">
                  <h2>{{ formVirtualProduct.vars.label }}</h2>
                </div>
                <div class=\"col-md-8\">
                  <fieldset class=\"form-group\">
                    {{ form_widget(formVirtualProduct.is_virtual_file) }}
                  </fieldset>
                </div>
              </div>

              <div id=\"virtual_product_content\" class=\"row col-md-8\">
                {{ form_errors(formVirtualProduct) }}
                <div class=\"col-md-12\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">{{ formVirtualProduct.file.vars.label }}</label>
                    <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"{{ \"Upload a file from your computer (%maxUploadSize% max.)\"|trans({'%maxUploadSize%': max_upload_size}, 'Admin.Catalog.Help') }}\" ></span>
                    <div id=\"form_step3_virtual_product_file_input\" class=\"{{ formVirtualProduct.vars.value.filename is defined ? 'hide' : 'show' }}\">
                      {{ form_widget(formVirtualProduct.file) }}
                    </div>
                    <div id=\"form_step3_virtual_product_file_details\" class=\"{{ formVirtualProduct.vars.value.filename is defined ? 'show' : 'hide' }}\">
                      <a href=\"{{ formVirtualProduct.vars.value.file_download_link is defined ? formVirtualProduct.vars.value.file_download_link : '' }}\" class=\"btn btn-default btn-sm download\">{{ 'Download file'|trans({}, 'Admin.Actions') }}</a>
                      <a href=\"{{ path('admin_product_virtual_remove_file_action', {'idProduct': productId}) }}\" class=\"btn btn-danger btn-sm delete\">{{ 'Delete this file'|trans({}, 'Admin.Actions') }}</a>
                    </div>
                  </fieldset>
                </div>
                <div class=\"col-md-6\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">{{ formVirtualProduct.name.vars.label }}</label>
                    <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"{{ \"The full filename with its extension (e.g. Book.pdf)\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                    {{ form_errors(formVirtualProduct.name) }}
                    {{ form_widget(formVirtualProduct.name) }}
                  </fieldset>
                </div>
                <div class=\"col-md-6\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">{{ formVirtualProduct.nb_downloadable.vars.label }}</label>
                    <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"{{ \"Number of downloads allowed per customer. Set to 0 for unlimited downloads.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                    {{ form_errors(formVirtualProduct.nb_downloadable) }}
                    {{ form_widget(formVirtualProduct.nb_downloadable) }}
                  </fieldset>
                </div>
                <div class=\"col-md-6\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">{{ formVirtualProduct.expiration_date.vars.label }}</label>
                    <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"{{ \"If set, the file will not be downloadable after this date. Leave blank if you do not wish to attach an expiration date.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                    {{ form_errors(formVirtualProduct.expiration_date) }}
                    {{ form_widget(formVirtualProduct.expiration_date) }}
                  </fieldset>
                </div>
                <div class=\"col-md-6\">
                  <fieldset class=\"form-group\">
                    <label class=\"form-control-label\">{{ formVirtualProduct.nb_days.vars.label }}</label>
                    <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"{{ \"Number of days this file can be accessed by customers. Set to zero for unlimited access.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                    {{ form_errors(formVirtualProduct.nb_days) }}
                    {{ form_widget(formVirtualProduct.nb_days) }}
                  </fieldset>
                </div>
                <div class=\"col-md-12\">
                  {{ form_widget(formVirtualProduct.save) }}
                </div>
              </div>
            </div>

            {% if asm_globally_activated and formType.vars.value != \"2\" %}
              <div class=\"form-group\" id=\"asm_quantity_management\">
                <label class=\"col-sm-2 control-label\" for=\"form_step3_advanced_stock_management\"></label>
                <div class=\"col-sm-10\">
                  {{ form_errors(formAdvancedStockManagement) }}
                  {{ form_widget(formAdvancedStockManagement) }}
                  {% if form.step1.type_product.vars.value == \"1\" %}
                    {{ 'When enabling advanced stock management for a pack, please make sure it is also enabled for its product(s) – if you choose to decrement product quantities.'|trans({}, 'Admin.Catalog.Notification') }}
                  {% endif %}
                </div>
              </div>
              <div class=\"form-group\" id=\"depends_on_stock_div\" style=\"{% if not(formAdvancedStockManagement.vars.checked) %}display: none;{% endif %}\">
                <label class=\"col-sm-2 control-label\" for=\"form_step3_depends_on_stock\"></label>
                <div class=\"col-sm-10\">
                  {{ form_errors(formDependsOnStocks) }}
                  {{ form_widget(formDependsOnStocks) }}
                </div>
              </div>
            {% endif %}
            {% if 'PS_STOCK_MANAGEMENT'|configuration %}
              <div id=\"pack_stock_type\">
                <h2>{{ formPackStockType.vars.label }}</h2>
                <div class=\"row col-md-4\">
                  <fieldset class=\"form-group\">
                    {{ form_errors(formPackStockType) }}
                    {{ form_widget(formPackStockType) }}
                  </fieldset>
                </div>
              </div>
            {% endif %}
            {{ include('@Product/ProductPage/Forms/form_combinations.html.twig', {'form': formStep3, 'form_combination_bulk': formCombinations}) }}

            {{ renderhook('displayAdminProductsQuantitiesStepBottom', { 'id_product': productId }) }}

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
", "@Product/ProductPage/Panels/combinations.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Panels/combinations.html.twig");
    }
}
