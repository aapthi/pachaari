<?php class EM_Em0075settings_Block_Adminhtml_System_Config_Form_Field_Font extends Mage_Adminhtml_Block_System_Config_Form_Field{	/**     * Override field method to add js     *     * @param Varien_Data_Form_Element_Abstract $element     * @return String     */	protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)    {		$html = parent::_getElementHtml($element);		/*$html .= '<br/><div id="preview_'.$element->getHtmlId().'" style="font-size:20px; margin-top:5px;">EM google font review</div>		 <script>        var googleFontPreviewModel = Class.create();         googleFontPreviewModel.prototype = {            initialize : function()            {                this.fontElement = $("'.$element->getHtmlId().'");   		this.previewElement = $("preview_'.$element->getHtmlId().'");                this.loadedFonts = "";                 this.refreshPreview();                this.bindFontChange();            },            bindFontChange : function()            {                Event.observe(this.fontElement, "change", this.refreshPreview.bind(this));                Event.observe(this.fontElement, "keyup", this.refreshPreview.bind(this));                Event.observe(this.fontElement, "keydown", this.refreshPreview.bind(this));            },            refreshPreview : function()            {                 if ( this.loadedFonts.indexOf( this.fontElement.value ) > -1 ) {                    this.updateFontFamily();                    return;                }                 var ss = document.createElement("link");                ss.type = "text/css";                ss.rel = "stylesheet";                ss.href = "http://fonts.googleapis.com/css?family=" + this.fontElement.value;                document.getElementsByTagName("head")[0].appendChild(ss); 		this.updateFontFamily();                 this.loadedFonts += this.fontElement.value + ",";            },		updateFontFamily : function()            {                $(this.previewElement).setStyle({ fontFamily: this.fontElement.value });            }        }         googleFontPreview = new googleFontPreviewModel();        </script>        ';*/         return $html;    } }?>