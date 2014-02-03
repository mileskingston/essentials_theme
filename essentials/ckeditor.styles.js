/*
Added styles for the dropdown in CKEditor
*/

CKEDITOR.stylesSet.add( 'wfm_styles',
[
    // Block-level styles
    { name : 'Heading 2', element : 'h2', styles : { 'color' : 'Blue' } },
    { name : 'Heading 3' , element : 'h3', styles : { 'color' : 'Red' } },
    { name : 'Heading 4' , element : 'h4', styles : { 'color' : 'Red' } },
    { name : 'Heading 3' , element : 'pre', styles : { 'color' : 'Red' } },

 
    // Inline styles
    { name : 'Big Text', element : 'p', attributes : { 'class' : 'big-text' } },
    { name : 'Box link', element : 'a', attributes : { 'class' : 'box-link' } },
    { name : 'Breakout', element : 'div', attributes : { 'class' : 'breakout-box' } },
    
]);