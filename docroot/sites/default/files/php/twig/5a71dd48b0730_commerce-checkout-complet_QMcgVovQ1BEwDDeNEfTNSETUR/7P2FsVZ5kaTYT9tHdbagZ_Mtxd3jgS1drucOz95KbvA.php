<?php

/* modules/commerce/modules/checkout/templates/commerce-checkout-completion-message.html.twig */
class __TwigTemplate_f466377ae601b29bfcd96d52374f57f8092bed0a2468a72571fbc7e1dadbcb27 extends Twig_Template
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
        $tags = array("if" => 17);
        $filters = array("t" => 14);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 13
        echo "<div class=\"checkout-complete\">
  ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Your order number is @number.", array("@number" => $this->getAttribute((isset($context["order_entity"]) ? $context["order_entity"] : null), "getOrderNumber", array())))));
        echo " <br>
  ";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("You can view your order on your account page when logged in.")));
        echo " <br>

  ";
        // line 17
        if ((isset($context["payment_instructions"]) ? $context["payment_instructions"] : null)) {
            // line 18
            echo "    <div class=\"checkout-complete__payment-instructions\">
      <h2>";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Payment instructions")));
            echo "</h2>
      ";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["payment_instructions"]) ? $context["payment_instructions"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/commerce/modules/checkout/templates/commerce-checkout-completion-message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  64 => 20,  60 => 19,  57 => 18,  55 => 17,  50 => 15,  46 => 14,  43 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/commerce/modules/checkout/templates/commerce-checkout-completion-message.html.twig", "/Users/mulate1/Sites/devdesktop/nexus-event-cams-store/modules/commerce/modules/checkout/templates/commerce-checkout-completion-message.html.twig");
    }
}
