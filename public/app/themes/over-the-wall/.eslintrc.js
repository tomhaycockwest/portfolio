'use strict';

module.exports = {
	env: {
		'browser': true,
		'node': true,
		'commonjs': true,
		'es6': true
	},
	ecmaFeatures: {
		'modules': true
	},
	parserOptions: {
		'ecmaVersion': 6,
		'sourceType': 'module',
	},
	globals: {
		Modernizr: true,
		jQuery: true,
		$: true,
		Ember: true
	},
	rules: {

		// Best practices
		'accessor-pairs': 0,
		'block-scoped-var': 0,
		'complexity': 0,
		'consistent-return': 0,
		'curly': [ 2, 'all' ],
		'default-case': 2,
		'dot-location': [ 2, 'property' ],
		'dot-notation': 0,
		'eqeqeq': 0,
		'guard-for-in': 2,
		'no-alert': 0,
		'no-caller': 0,
		'no-case-declarations': 0,
		'no-div-regex': 0,
		'no-else-return': 0,
		'no-empty-pattern': 0,
		'no-eq-null': 0,
		'no-eval': 2,
		'no-extend-native': 2,
		'no-extra-bind': 0,
		'no-fallthrough': 0,
		'no-floating-decimal': 0,
		'no-implicit-coercion': 0,
		'no-implied-eval': 0,
		'no-invalid-this': 2,
		'no-iterator': 0,
		'no-labels': 0,
		'no-lone-blocks': 0,
		'no-loop-func': 2,
		'no-magic-numbers': 0,
		'no-multi-spaces': 0,
		'no-multi-str': 2,
		'no-native-reassign': 0,
		'no-new-func': 0,
		'no-new-wrappers': 0,
		'no-new': 0,
		'no-octal-escape': 0,
		'no-octal': 0,
		'no-param-reassign': 0,
		'no-process-env': 0,
		'no-proto': 0,
		'no-redeclare': 0,
		'no-return-assign': 0,
		'no-script-url': 0,
		'no-self-compare': 0,
		'no-sequences': 0,
		'no-throw-literal': 0,
		'no-unused-expressions': 0,
		'no-useless-call': 0,
		'no-useless-concat': 0,
		'no-void': 0,
		'no-warning-comments': 0,
		'no-with': 2,
		'radix': 0,
		'vars-on-top': 0,
		'wrap-iife': 0,
		'yoda': 0,

		// Errors
		'comma-dangle': 0,
		'no-cond-assign': 0,
		'no-console': 0,
		'no-constant-condition': 0,
		'no-control-regex': 0,
		'no-debugger': 0,
		'no-dupe-args': 0,
		'no-dupe-keys': 0,
		'no-duplicate-case': 0,
		'no-empty-character-class': 0,
		'no-empty': 0,
		'no-ex-assign': 0,
		'no-extra-boolean-cast': 0,
		'no-extra-parens': 2,
		'no-extra-semi': 0,
		'no-func-assign': 0,
		'no-inner-declarations': [ 2, 'functions' ],
		'no-invalid-regexp': 0,
		'no-irregular-whitespace': 0,
		'no-negated-in-lhs': 0,
		'no-obj-calls': 0,
		'no-regex-spaces': 0,
		'no-sparse-arrays': 0,
		'no-unexpected-multiline': 0,
		'no-unreachable': 0,
		'use-isnan': 0,
		'valid-jsdoc': 2,
		'valid-typeof': 0,

		// ES6
		'arrow-body-style': 0,
		'arrow-parens': 0,
		'arrow-spacing': 0,
		'constructor-super': 0,
		'generator-star-spacing': 0,
		'no-arrow-condition': 0,
		'no-class-assign': 0,
		'no-const-assign': 0,
		'no-dupe-class-members': 0,
		'no-this-before-super': 0,
		'no-var': 0,
		'object-shorthand': 0,
		'prefer-arrow-callback': 0,
		'prefer-const': 0,
		'prefer-reflect': 0,
		'prefer-spread': 0,
		'prefer-template': 0,
		'require-yield': 0,

		// Node
		'callback-return': 0,
		'global-require': 0,
		'handle-callback-err': 0,
		'no-mixed-requires': 0,
		'no-new-require': 0,
		'no-path-concat': 0,
		'no-process-exit': 0,
		'no-restricted-modules': 0,
		'no-sync': 0,

		// Strict
		'strict': 0,

		// Style
		'array-bracket-spacing': 0,
		'block-spacing': 0,
		'brace-style': [ 2, '1tbs', {'allowSingleLine': true} ],
		'camelcase': 2,
		'comma-spacing': 0,
		'comma-style': 0,
		'computed-property-spacing': 0,
		'consistent-this': 0,
		'eol-last': 0,
		'func-names': 0,
		'func-style': 0,
		'id-length': 0,
		'id-match': 0,
		'indent': [ 2, 'tab' ],
		'jsx-quotes': 0,
		'key-spacing': [ 2, {'beforeColon': false, 'afterColon': true} ],
		'linebreak-style': 0,
		'lines-around-comment': 0,
		'max-depth': 0,
		'max-len': [ 2, 150, 4, {
			ignoreComments: true,
			ignoreUrls: true,
			ignorePattern: '^\\s*var\\s.+=\\s*require\\s*\\('
		} ],
		'max-nested-callbacks': 0,
		'max-params': 0,
		'max-statements': 0,
		'new-cap': 2,
		'new-parens': 0,
		'newline-after-var': 2,
		'no-array-constructor': 2,
		'no-bitwise': 0,
		'no-continue': 0,
		'no-inline-comments': 0,
		'no-lonely-if': 0,
		'no-mixed-spaces-and-tabs': 2,
		'no-multiple-empty-lines': 0,
		'no-negated-condition': 0,
		'no-nested-ternary': 0,
		'no-new-object': 2,
		'no-plusplus': 0,
		'no-restricted-syntax': 0,
		'no-spaced-func': 2,
		'no-ternary': 0,
		'no-trailing-spaces': 2,
		'no-underscore-dangle': 0,
		'no-unneeded-ternary': 0,
		'object-curly-spacing': [ 2, 'never' ],
		'one-var': 0,
		'operator-assignment': 0,
		'operator-linebreak': [ 2, 'after' ],
		'padded-blocks': 0,
		'quote-props': 0,
		'quotes': [ 2, 'single' ],
		'require-jsdoc': 0,
		'semi-spacing': 0,
		'semi': 2,
		'sort-vars': 0,
		'keyword-spacing': 0,
		'space-before-blocks': [ 2, 'always' ],
		'space-before-function-paren': [ 2, 'never' ],
		'space-in-parens': [ 2, 'never' ],
		'space-infix-ops': 2,
		'space-unary-ops': 0,
		'spaced-comment': 0,
		'wrap-regex': 0,

		// Variables
		'init-declarations': 0,
		'no-catch-shadow': 0,
		'no-delete-var': 0,
		'no-label-var': 0,
		'no-shadow-restricted-names': 0,
		'no-shadow': 0,
		'no-undef-init': 0,
		'no-undef': 2,
		'no-undefined': 0,
		'no-unused-vars': 0,
		'no-use-before-define': 0
	}
};
