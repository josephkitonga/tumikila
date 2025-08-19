<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    /**
     * Index Page for Tumikila Talents Solutions
     */
    public function index()
    {
        $this->load->helper('url');
        $data['title'] = 'Tumikila Talents Solutions - HR & Talent Outsourcing';
        $data['company_name'] = 'Tumikila Talents Solutions';
        $data['industry'] = 'Human Resources (HR) and Talent Outsourcing';
        $data['location'] = 'Lusenfwa Road, Kalundu, Lusaka, Zambia 37889 3rd floor';
        $data['about'] = 'Tumikila Talents Solutions is a dynamic HR agency based in Lusaka, Zambia, specializing in talent outsourcing and comprehensive employee management services. We partner with businesses to provide skilled and reliable personnel, while handling all employee-related matters—from recruitment and onboarding to performance management and compliance.';
        $data['focus'] = 'With a focus on efficiency, integrity, and professionalism, we help companies reduce their HR burden so they can focus on what they do best—growing their business.';
        $data['services'] = [
            'Employee Outsourcing',
            'Recruitment & Talent Acquisition',
            'HR Administration & Payroll',
            'Employee Relations Management',
            'Compliance with Labor Laws',
            'Performance Monitoring & Reporting'
        ];
        $data['vision'] = 'To be Zambia\'s leading HR outsourcing partner, recognized for transforming how businesses manage and retain top talent.';
        $data['phone'] = '0771366401';
        $data['email'] = 'siameketurah19@gmail.com';
        $data['tagline'] = 'We handle the people, so you can handle the business.';

        $this->load->view('home', $data);
    }
}
