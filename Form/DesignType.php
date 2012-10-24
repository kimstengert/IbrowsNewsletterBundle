<?php

namespace Ibrows\Bundle\NewsletterBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;

class DesignType extends AbstractType
{
	/**
	 * @param FormBuilderInterface $builder
	 * @param array $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
		->add('name')
		->add('content')
		;
	}
	
	/**
	 *
	 */
	public function getName() {
		return 'ibrows_newsletterbundle_design';
	}
}
