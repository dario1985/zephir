
#ifdef HAVE_CONFIG_H
#include "../ext_config.h"
#endif

#include <php.h>
#include "../php_ext.h"
#include "../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "kernel/fcall.h"
#include "kernel/memory.h"


ZEPHIR_INIT_CLASS(Test_UseTest) {

	ZEPHIR_REGISTER_CLASS(Test, UseTest, test, usetest, test_usetest_method_entry, 0);

	zend_class_implements(test_usetest_ce TSRMLS_CC, 1, spl_ce_Countable);
	return SUCCESS;

}

PHP_METHOD(Test_UseTest, createInstance) {

	zend_class_entry *_0;

	ZEPHIR_MM_GROW();

	_0 = zend_fetch_class(SL("\\stdClass"), ZEND_FETCH_CLASS_AUTO TSRMLS_CC);
	object_init_ex(return_value, _0);
	if (zephir_has_constructor(return_value TSRMLS_CC)) {
		zephir_call_method_noret(return_value, "__construct");
	}
	RETURN_MM();

}

PHP_METHOD(Test_UseTest, count) {



}

PHP_METHOD(Test_UseTest, testUseClass1) {

	zend_class_entry *_0;

	ZEPHIR_MM_GROW();

	_0 = zend_fetch_class(SL("Oo\\OoConstruct"), ZEND_FETCH_CLASS_AUTO TSRMLS_CC);
	object_init_ex(return_value, _0);
	if (zephir_has_constructor(return_value TSRMLS_CC)) {
		zephir_call_method_noret(return_value, "__construct");
	}
	RETURN_MM();

}

PHP_METHOD(Test_UseTest, testUseClass2) {

	zend_class_entry *_0;

	ZEPHIR_MM_GROW();

	_0 = zend_fetch_class(SL("Strings"), ZEND_FETCH_CLASS_AUTO TSRMLS_CC);
	object_init_ex(return_value, _0);
	if (zephir_has_constructor(return_value TSRMLS_CC)) {
		zephir_call_method_noret(return_value, "__construct");
	}
	RETURN_MM();

}

PHP_METHOD(Test_UseTest, testUseNamespaceAlias) {

	zend_class_entry *_0;

	ZEPHIR_MM_GROW();

	_0 = zend_fetch_class(SL("Oo\\OoConstruct"), ZEND_FETCH_CLASS_AUTO TSRMLS_CC);
	object_init_ex(return_value, _0);
	if (zephir_has_constructor(return_value TSRMLS_CC)) {
		zephir_call_method_noret(return_value, "__construct");
	}
	RETURN_MM();

}

