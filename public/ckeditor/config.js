/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    config.filebrowserBrowseUrl = 'http://localhost:81/tivi/public/ckfinder/ckfinder.html';

    config.filebrowserImageBrowseUrl = 'http://localhost:81/tivi/public/ckfinder/ckfinder.html?type=Images';

    config.filebrowserFlashBrowseUrl = 'http://localhost:81/tivi/public/ckfinder/ckfinder.html?type=Flash';

    config.filebrowserUploadUrl = 'http://localhost:81/qlbh/bantivi/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';

    config.filebrowserImageUploadUrl = 'http://localhost:81/bantivi/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';

    config.filebrowserFlashUploadUrl = 'http://localhost:81/bantivi/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
