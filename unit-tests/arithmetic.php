<?php

$t = new Test\Arithmetic();

// SUM TESTS

assert($t->intSum() === 3);
assert($t->int2Sum() === 3);
assert($t->intSumSimple() === 3);
assert($t->doubleSum() === 3.0);
assert($t->double2Sum() === 3.0);
assert($t->doubleSumSimple() === 3.0);
assert($t->doubleSum2Simple() === 3.0);
assert($t->boolSum() === true);
assert($t->bool2Sum() === true);
assert($t->bool3Sum() === true);
assert($t->boolSumSimple() === true);
assert($t->varSum() === 3);
assert($t->varSumSimple() === 3);
assert($t->intDoubleSum() === 3);
assert($t->intDoubleSumSimple() === 3);
assert($t->doubleIntSum() === 3.0);
assert($t->doubleIntSumSimple() === 3.0);
assert($t->varIntSum() === 3);
assert($t->intVarSum() === 3);
assert($t->intVarImplicitCastSum() == 3);
assert($t->intVarImplicitCast2Sum() == 3);
assert($t->complexSum() === 3.0);
assert($t->complex2Sum() === true);
assert($t->complex3Sum() === true);
assert($t->complex4Sum() === 2.0);
assert($t->complex5Sum() === 2);
assert($t->complex6Sum() === true);
assert($t->complex7Sum() === 3);
assert($t->complex9Sum() === 3);
assert($t->complex10Sum() === 3.0);
assert($t->complex11Sum() === 3.0);
assert($t->complex12Sum() === 3);
assert($t->complex13Sum() === 1);
assert($t->complex14Sum() === 2);
assert($t->complex15Sum() === true);
assert($t->complex17Sum() === 2.0);
assert($t->complex18Sum() === 4.0);
assert($t->complex19Sum() === 4.0);
assert($t->complex20Sum() === 8.0);
assert($t->complex21Sum() === 12.0);
assert($t->complex22Sum() === 21.0);
assert($t->complex23Sum() === 2.0);
assert($t->complex24Sum() === 3.0);
assert($t->addSum1() === 10);
assert($t->addSum2() === 0);
assert($t->addSum2b() === 5);
assert($t->addSum3() === 1);
assert($t->addSum4() === 0);
assert($t->addSum5() === 1);
assert($t->addSum6() === 1);
assert($t->addSum7() === 10.0);
assert($t->addSum8() === 0.0);
assert($t->addSum8b() === 6.3);
assert($t->addSum9() === 1.0);
assert($t->addSum10() === 0.0);
assert($t->addSum11() === 1.0);
assert($t->addSum12() === 10);
assert($t->addSum13() === 1);
assert($t->addSum14() === 0);
assert($t->addSum15() === 1);
assert($t->addSum16() === 10.0);
assert($t->addSum17() === 1.0);
assert($t->addSum18() === 0.0);
assert($t->addSum19() === 1.0);
assert($t->addSum20() === 1);
assert($t->addSum21() === 1.0);
assert($t->addSum22() === 1);
assert($t->addSum23() === 1 + (1 << 10));
assert($t->addSum24(1) === 1 + (1 << 10));

// SUB TESTS

assert($t->intSub() === -1);
assert($t->int2Sub() === -1);
assert($t->intSubSimple() === -1);
assert($t->boolSub() === true);
assert($t->bool2Sub() === true);
assert($t->bool3Sub() === false); // true - false
assert($t->bool4Sub() === true);  // true - true
assert($t->boolSubSimple() === true);
assert($t->doubleSub() === -1.0);
assert($t->double2Sub() === -1.0);
assert($t->doubleSubSimple() === -1.0);
assert($t->doubleSub2Simple() === -1.0);
assert($t->varSub() === -1);
assert($t->varSubSimple() === -1);
assert($t->intDoubleSub() === -1);
assert($t->intDoubleSubSimple() === -1);
assert($t->doubleIntSub() === -1.0);
assert($t->doubleIntSubSimple() === -1.0);
assert($t->varIntSub() === -1);
assert($t->intVarSub() === 1);
assert($t->intVarImplicitCastSub() == 1);
assert($t->intVarImplicitCast2Sub() == 1);
assert($t->complexSub() === 1.0);
assert($t->complex2Sub() === true);
assert($t->complex3Sub() === true);
assert($t->complex4Sub() === 0.0);
assert($t->complex5Sub() === 0);
assert($t->complex6Sub() === true);
assert($t->complex7Sub() === -1);
assert($t->complex9Sub() === 1);
assert($t->complex10Sub() === 1.0);
assert($t->complex11Sub() === 1.0);
assert($t->complex12Sub() === 1);
assert($t->complex13Sub() === 1);
assert($t->complex14Sub() === 0);
assert($t->complex15Sub() === true);
assert($t->complex17Sub() === 0.0);
assert($t->complex18Sub() === 0.0);
assert($t->complex19Sub() === 0.0);
assert($t->complex20Sub() === 0.0);
assert($t->complex21Sub() === -2.0);
assert($t->complex22Sub() === 3.0);
assert($t->complex23Sub() === 0.0);
assert($t->complex24Sub() === -1.0);
assert($t->sub1() === -10);
assert($t->sub2() === 0);
assert($t->sub2b() === 5);
assert($t->sub3() === -1);
assert($t->sub4() === 0);
assert($t->sub5() === -1);
assert($t->sub6() === -1);
assert($t->sub7() === -10.0);
assert($t->sub8() === 0.0);
assert($t->sub8b() === 6.3);
assert($t->sub9() === -1.0);
assert($t->sub10() === 0.0);
assert($t->sub11() === -1.0);
assert($t->sub12() === -10);
assert($t->sub13() === -1);
assert($t->sub14() === 0);
assert($t->sub15() === -1);
assert($t->sub16() === -10.0);
assert($t->sub17() === -1.0);
assert($t->sub18() === 0.0);
assert($t->sub19() === -1.0);
assert($t->sub20() === -1);
assert($t->sub21() === -1.0);
assert($t->sub22() === -1);
assert($t->sub23() === 1 - (1 << 10));
assert($t->sub24(1) === 1 - (1 << 10));

assert($t->mul1() == 5);
assert($t->mul2(5) == 25);
assert($t->mul3() == 1 * (1 << 10));


assert($t->letStatementIntMinus() === -1);
assert($t->letStatementVarMinus(1) === -1);
assert($t->letStatementVarMinus(-1) === 1);
assert($t->letStatementVarMinus(true) === -true);
assert($t->letStatementVarMinus(false) === -false);
assert($t->letStatementVarMinus("") === -"");

assert($t->letStatementBoolMinus(-1) === true); // it is zend_bool not zend_var
assert($t->letStatementBoolMinus(1) === true);
assert($t->letStatementBoolMinus(true) === true);

assert($t->letStatementBoolMinus(false) === false);
assert($t->letStatementBoolMinus(0) === false);