<?php
class ControllerModuleOpenCartCpf extends Controller {
    public function install() {
        // Adiciona CPF na tabela *_customer e *_order
        $this->db->query("ALTER TABLE " . DB_PREFIX . "customer ADD cpf VARCHAR(11) NOT NULL AFTER email");
        $this->db->query("ALTER TABLE " . DB_PREFIX . "order ADD cpf VARCHAR(11) NOT NULL AFTER email");
    }

    public function index() {
        $this->language->load('module/opencart_cpf');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');

        $data['heading_title'] = $this->language->get('heading_title');

        $data['text_edit'] = $this->language->get('text_edit');

        $data['entry_status'] = $this->language->get('entry_status');

        $data['button_save'] = $this->language->get('button_save');
        $data['button_cancel'] = $this->language->get('button_cancel');

        $data['tab_general'] = $this->language->get('tab_general');

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], 'SSL'),
            'separator' => false
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_module'),
            'href' => $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL'),
            'separator' => ' :: '
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('module/opencart_cpf', 'token=' . $this->session->data['token'], 'SSL'),
            'separator' => ' :: '
        );

        $data['action'] = $this->url->link('module/opencart_cpf', 'token=' . $this->session->data['token'], 'SSL');

        $data['cancel'] = $this->url->link('extension/module', 'token=' . $this->session->data['token'], true);

        $this->data = array_merge($this->data, $data);

        $this->template = 'module/opencart_cpf.tpl';

        $this->children = array(
            'common/header',
            'common/footer'
        );

        $this->response->setOutput($this->render());
    }

    public function uninstall() {
        // Remove o CPF da tabela *_customer e *_order
        $this->db->query("ALTER TABLE " . DB_PREFIX . "customer DROP cpf;");
        $this->db->query("ALTER TABLE " . DB_PREFIX . "order DROP cpf;");
    }
}
