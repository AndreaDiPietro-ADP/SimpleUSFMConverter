<?php

namespace YggdrasHill\SimpleUSFMConverter;

/**
 * Description of SimpleUSFMConverter
 *
 * @author andreadipietro
 */
abstract class SimpleUSFMConverter {
    CONST PAIR_MARKER_LIST = [
        'ior'       => [ 'tag' => 'span', 'class' => 'introductions',              'numbered'=>false, 'implicit_closure'=>null, ],
        'iqt'       => [ 'tag' => 'span', 'class' => 'introductions',              'numbered'=>false, 'implicit_closure'=>null, ],
        'rq'        => [ 'tag' => 'span', 'class' => 'titlesheadingsandlabel',     'numbered'=>false, 'implicit_closure'=>null, ],
        'ca'        => [ 'tag' => 'span', 'class' => 'chaptersandverses',          'numbered'=>false, 'implicit_closure'=>null, ],
        'va'        => [ 'tag' => 'span', 'class' => 'chaptersandverses',          'numbered'=>false, 'implicit_closure'=>null, ],
        'vp'        => [ 'tag' => 'span', 'class' => 'chaptersandverses',          'numbered'=>false, 'implicit_closure'=>null, ],
        'qs'        => [ 'tag' => 'span', 'class' => 'poetry',                     'numbered'=>false, 'implicit_closure'=>null, ],
        'qac'       => [ 'tag' => 'span', 'class' => 'poetry',                     'numbered'=>false, 'implicit_closure'=>null, ],
        'litl'      => [ 'tag' => 'span', 'class' => 'lists',                      'numbered'=>false, 'implicit_closure'=>null, ],
        'lik'       => [ 'tag' => 'span', 'class' => 'lists',                      'numbered'=>false, 'implicit_closure'=>null, ],
        'liv'       => [ 'tag' => 'span', 'class' => 'lists',                      'numbered'=>true, 'implicit_closure'=>null, ],
        'f'          => [ 'tag' => 'span', 'class' => 'footnotes',                  'numbered'=>false, 'implicit_closure'=>null, ],
        'fe'         => [ 'tag' => 'span', 'class' => 'footnotes',                  'numbered'=>false, 'implicit_closure'=>null, ],
        'fr'         => [ 'tag' => 'span', 'class' => 'footnotes',                  'numbered'=>false, 'implicit_closure'=>[ 'f','f*','fe','fe*','fq','fqa','fk','fl','fw','fp','ft','fv','fdc','fm', ], ],
        'fq'         => [ 'tag' => 'span', 'class' => 'footnotes',                  'numbered'=>false, 'implicit_closure'=>[ 'f','f*','fe','fe*','fr','fqa','fk','fl','fw','fp','ft','fv','fdc','fm', ], ],
        'fqa'        => [ 'tag' => 'span', 'class' => 'footnotes',                  'numbered'=>false, 'implicit_closure'=>[ 'f','f*','fe','fe*','fr','fq','fk','fl','fw','fp','ft','fv','fdc','fm', ], ],
        'fk'         => [ 'tag' => 'span', 'class' => 'footnotes',                  'numbered'=>false, 'implicit_closure'=>[ 'f','f*','fe','fe*','fr','fq','fqa','fl','fw','fp','ft','fv','fdc','fm', ], ],
        'fl'         => [ 'tag' => 'span', 'class' => 'footnotes',                  'numbered'=>false, 'implicit_closure'=>[ 'f','f*','fe','fe*','fr','fq','fqa','fk','fw','fp','ft','fv','fdc','fm', ], ],
        'fw'         => [ 'tag' => 'span', 'class' => 'footnotes',                  'numbered'=>false, 'implicit_closure'=>[ 'f','f*','fe','fe*','fr','fq','fqa','fk','fl','fp','ft','fv','fdc','fm', ], ],
        'fp'         => [ 'tag' => 'span', 'class' => 'footnotes',                  'numbered'=>false, 'implicit_closure'=>[ 'f','f*','fe','fe*','fr','fq','fqa','fk','fl','fw','ft','fv','fdc','fm', ], ],
        'ft'         => [ 'tag' => 'span', 'class' => 'footnotes',                  'numbered'=>false, 'implicit_closure'=>[ 'f','f*','fe','fe*','fr','fq','fqa','fk','fl','fw','fp','fv','fdc','fm', ], ],
        'fv'         => [ 'tag' => 'span', 'class' => 'footnotes',                  'numbered'=>false, 'implicit_closure'=>null, ],
        'fdc'        => [ 'tag' => 'span', 'class' => 'footnotes',                  'numbered'=>false, 'implicit_closure'=>null, ],
        'fm'         => [ 'tag' => 'span', 'class' => 'footnotes',                  'numbered'=>false, 'implicit_closure'=>null, ],
        'em'        => [ 'tag' => 'em', 'class' => 'characterstyling',             'numbered'=>false, 'implicit_closure'=>null, ],
        'bd'        => [ 'tag' => 'b', 'class' => 'characterstyling',              'numbered'=>false, 'implicit_closure'=>null, ],
        '+bd'       => [ 'tag' => 'b', 'class' => 'characterstyling',              'numbered'=>false, 'implicit_closure'=>null, ],
        'it'        => [ 'tag' => 'i', 'class' => 'characterstyling',              'numbered'=>false, 'implicit_closure'=>null, ],
        'bdit'      => [ 'tag' => ['b','i'], 'class' => 'characterstyling',         'numbered'=>false, 'implicit_closure'=>null, ],
        'no'        => [ 'tag' => 'span', 'class' => 'characterstyling',            'numbered'=>false, 'implicit_closure'=>null, ],
        'sc'        => [ 'tag' => 'small', 'class' => 'characterstyling',           'numbered'=>false, 'implicit_closure'=>null, ],
        'sup'       => [ 'tag' => 'sup', 'class' => 'characterstyling',             'numbered'=>false, 'implicit_closure'=>null, ],
        'add'       => [ 'tag' => 'span', 'class' => 'wordsandcharacters',          'numbered'=>false, 'implicit_closure'=>null, ],
        'bk'        => [ 'tag' => 'span', 'class' => 'wordsandcharacters',          'numbered'=>false, 'implicit_closure'=>null, ],
        '+bk'       => [ 'tag' => 'span', 'class' => 'wordsandcharacters',          'numbered'=>false, 'implicit_closure'=>null, ],
        'dc'        => [ 'tag' => 'span', 'class' => 'wordsandcharacters',          'numbered'=>false, 'implicit_closure'=>null, ],
        '+dc'       => [ 'tag' => 'span', 'class' => 'wordsandcharacters',          'numbered'=>false, 'implicit_closure'=>null, ],
        'k'         => [ 'tag' => 'span', 'class' => 'wordsandcharacters',          'numbered'=>false, 'implicit_closure'=>null, ],
        'nd'        => [ 'tag' => 'span', 'class' => 'wordsandcharacters',          'numbered'=>false, 'implicit_closure'=>null, ],
        'pn'        => [ 'tag' => 'span', 'class' => 'wordsandcharacters',          'numbered'=>false, 'implicit_closure'=>null, ],
        'png'       => [ 'tag' => 'span', 'class' => 'wordsandcharacters',          'numbered'=>false, 'implicit_closure'=>null, ],
        'addpn'     => [ 'tag' => 'span', 'class' => 'wordsandcharacters',          'numbered'=>false, 'implicit_closure'=>null, ],
        'qt'        => [ 'tag' => 'span', 'class' => 'wordsandcharacters',          'numbered'=>false, 'implicit_closure'=>null, ],
        'sig'       => [ 'tag' => 'span', 'class' => 'wordsandcharacters',          'numbered'=>false, 'implicit_closure'=>null, ],
        'sls'       => [ 'tag' => 'span', 'class' => 'wordsandcharacters',          'numbered'=>false, 'implicit_closure'=>null, ],
        'tl'        => [ 'tag' => 'span', 'class' => 'wordsandcharacters',          'numbered'=>false, 'implicit_closure'=>null, ],
        'wj'        => [ 'tag' => 'span', 'class' => 'wordsandcharacters',          'numbered'=>false, 'implicit_closure'=>null, ],
        'ndx'       => [ 'tag' => 'span', 'class' => 'wordsandcharacters',          'numbered'=>false, 'implicit_closure'=>null, ],
        //'rb' https://ubsicap.github.io/usfm/characters/index.html#rb-rb ruby ruby characters... not today
        'pro'       => [ 'tag' => 'span', 'class' => 'wordsandcharacters',          'numbered'=>false, 'implicit_closure'=>null, ],
        'x'         => [ 'tag' => 'span', 'class' => 'crossreferences',             'numbered'=>false, 'implicit_closure'=>null, ],
        'xo'        => [ 'tag' => 'span', 'class' => 'crossreferences',             'numbered'=>false, 'implicit_closure'=>[ 'x','x*','xk','xq','xt','xta', ], ],
        'xk'        => [ 'tag' => 'span', 'class' => 'crossreferences',             'numbered'=>false, 'implicit_closure'=>[ 'x','x*','xo','xq','xt','xta', ], ],
        'xq'        => [ 'tag' => 'span', 'class' => 'crossreferences',             'numbered'=>false, 'implicit_closure'=>[ 'x','x*','xo','xk','xt','xta', ], ],
        'xt'        => [ 'tag' => 'span', 'class' => 'crossreferences',             'numbered'=>false, 'implicit_closure'=>[ 'x','x*','xo','xk','xq','xta', ], ],
        'xta'       => [ 'tag' => 'span', 'class' => 'crossreferences',             'numbered'=>false, 'implicit_closure'=>[ 'x','x*','xo','xk','xq','xt', ], ],
        'xop'       => [ 'tag' => 'span', 'class' => 'crossreferences',             'numbered'=>false, 'implicit_closure'=>null, ],
        'xot'       => [ 'tag' => 'span', 'class' => 'crossreferences',             'numbered'=>false, 'implicit_closure'=>null, ],
        'xnt'       => [ 'tag' => 'span', 'class' => 'crossreferences',             'numbered'=>false, 'implicit_closure'=>null, ],
        'xdc'       => [ 'tag' => 'span', 'class' => 'crossreferences',             'numbered'=>false, 'implicit_closure'=>null, ],
        'rq'        => [ 'tag' => 'span', 'class' => 'crossreferences',             'numbered'=>false, 'implicit_closure'=>null, ],
        'w'          => [ 'tag' => 'span', 'class' => 'specialfeatures',             'numbered'=>false, 'implicit_closure'=>null, ],
        '+w'         => [ 'tag' => 'span', 'class' => 'specialfeatures',             'numbered'=>false, 'implicit_closure'=>null, ],
        'wg'         => [ 'tag' => 'span', 'class' => 'specialfeatures',             'numbered'=>false, 'implicit_closure'=>null, ],
        '+wg'        => [ 'tag' => 'span', 'class' => 'specialfeatures',             'numbered'=>false, 'implicit_closure'=>null, ],
        'wh'         => [ 'tag' => 'span', 'class' => 'specialfeatures',             'numbered'=>false, 'implicit_closure'=>null, ],
        '+wh'        => [ 'tag' => 'span', 'class' => 'specialfeatures',             'numbered'=>false, 'implicit_closure'=>null, ],
        'wa'         => [ 'tag' => 'span', 'class' => 'specialfeatures',             'numbered'=>false, 'implicit_closure'=>null, ],
        '+wa'        => [ 'tag' => 'span', 'class' => 'specialfeatures',             'numbered'=>false, 'implicit_closure'=>null, ],
        'fig'        => [ 'tag' => 'span', 'class' => 'specialfeatures',             'numbered'=>false, 'implicit_closure'=>null, ],
        'zw'        => [ 'tag' => 'span', 'class' => 'peripherals',             'numbered'=>false, 'implicit_closure'=>null, ],
        '+zw'       => [ 'tag' => 'span', 'class' => 'peripherals',             'numbered'=>false, 'implicit_closure'=>null, ],
        
        'th'        => [ 'tag' => 'th', 'class' => 'tables',             'numbered'=>true, 'implicit_closure'=>[ 'tr','th','thr','tc','tcr', ], ],
        'thr'       => [ 'tag' => 'th', 'class' => 'tables',             'numbered'=>true, 'implicit_closure'=>[ 'tr','th','thr','tc','tcr', ], ],
        'tc'        => [ 'tag' => 'td', 'class' => 'tables',             'numbered'=>true, 'implicit_closure'=>[ 'tr','th','thr','tc','tcr', ], ],
        'tcr'       => [ 'tag' => 'td', 'class' => 'tables',             'numbered'=>true, 'implicit_closure'=>[ 'tr','th','thr','tc','tcr', ], ],
    ];
    
    CONST NL_MARKER_LIST = [
        'ip'        => [ 'tag' => 'span', 'class' => 'introductions',            'numbered'=>false, ],
        'pi'        => [ 'tag' => 'span', 'class' => 'introductions',            'numbered'=>false, ],
        'im'        => [ 'tag' => 'span', 'class' => 'introductions',            'numbered'=>false, ],
        'imi'       => [ 'tag' => 'span', 'class' => 'introductions',            'numbered'=>false, ],
        'ipq'       => [ 'tag' => 'span', 'class' => 'introductions',            'numbered'=>false, ],
        'imq'       => [ 'tag' => 'span', 'class' => 'introductions',            'numbered'=>false, ],
        'ipr'       => [ 'tag' => 'span', 'class' => 'introductions',            'numbered'=>false, ],
        'ib'        => [ 'tag' => 'span', 'class' => 'introductions',            'numbered'=>false, ],
        'iot'       => [ 'tag' => 'span', 'class' => 'introductions',            'numbered'=>false, ],
        'iex'       => [ 'tag' => 'span', 'class' => 'introductions',            'numbered'=>false, ],
        'ie'        => [ 'tag' => 'span', 'class' => 'introductions',            'numbered'=>false, ],
        'imt'       => [ 'tag' => 'span', 'class' => 'introductions',            'numbered'=>true, ],
        'is'        => [ 'tag' => 'span', 'class' => 'introductions',            'numbered'=>true, ],
        'iq'        => [ 'tag' => 'span', 'class' => 'introductions',            'numbered'=>true, ],
        'ili'       => [ 'tag' => 'span', 'class' => 'introductions',            'numbered'=>true, ],
        'io'        => [ 'tag' => 'span', 'class' => 'introductions',            'numbered'=>true, ],
        'imte'      => [ 'tag' => 'span', 'class' => 'introductions',            'numbered'=>true, ],
        
        
        'mr'        => [ 'tag' => 'span', 'class' => 'titlesheadingsandlabel',   'numbered'=>false, ],
        'sr'        => [ 'tag' => 'span', 'class' => 'titlesheadingsandlabel',   'numbered'=>false, ],
        'r'         => [ 'tag' => 'span', 'class' => 'titlesheadingsandlabel',   'numbered'=>false, ],
        'd'         => [ 'tag' => 'span', 'class' => 'titlesheadingsandlabel',   'numbered'=>false, ],
        'sp'        => [ 'tag' => 'span', 'class' => 'titlesheadingsandlabel',   'numbered'=>false, ],
        'mt'        => [ 'tag' => 'span', 'class' => 'titlesheadingsandlabel',   'numbered'=>true, ],
        'mte'       => [ 'tag' => 'span', 'class' => 'titlesheadingsandlabel',   'numbered'=>true, ],
        'ms'        => [ 'tag' => 'span', 'class' => 'titlesheadingsandlabel',   'numbered'=>true, ],
        's'         => [ 'tag' => 'span', 'class' => 'titlesheadingsandlabel',   'numbered'=>true, ],
        'sd'        => [ 'tag' => 'span', 'class' => 'titlesheadingsandlabel',   'numbered'=>true, ],
        
        'c'         => [ 'tag' => 'span', 'class' => 'chaptersandverses',        'numbered'=>false, ],
        'cl'        => [ 'tag' => 'span', 'class' => 'chaptersandverses',        'numbered'=>false, ],
        'cp'        => [ 'tag' => 'span', 'class' => 'chaptersandverses',        'numbered'=>false, ],
        'cd'        => [ 'tag' => 'span', 'class' => 'chaptersandverses',        'numbered'=>false, ],
        'v'         => [ 'tag' => 'span', 'class' => 'chaptersandverses',        'numbered'=>false, 'verse_number_tag' => 'sup', 'verse_number_class' => 'usfm usfm_chaptersandverses verse_number' , ],
        
        'p'         => [ 'tag' => 'span', 'class' => 'paragraphs',               'numbered'=>false, ],
        'm'         => [ 'tag' => 'span', 'class' => 'paragraphs',               'numbered'=>false, ],
        'po'        => [ 'tag' => 'span', 'class' => 'paragraphs',               'numbered'=>false, ],
        'pr'        => [ 'tag' => 'span', 'class' => 'paragraphs',               'numbered'=>false, ],
        'cls'       => [ 'tag' => 'span', 'class' => 'paragraphs',               'numbered'=>false, ],
        'pmo'       => [ 'tag' => 'span', 'class' => 'paragraphs',               'numbered'=>false, ],
        'pm'        => [ 'tag' => 'span', 'class' => 'paragraphs',               'numbered'=>false, ],
        'pmc'       => [ 'tag' => 'span', 'class' => 'paragraphs',               'numbered'=>false, ],
        'pmr'       => [ 'tag' => 'span', 'class' => 'paragraphs',               'numbered'=>false, ],
        'mi'        => [ 'tag' => 'span', 'class' => 'paragraphs',               'numbered'=>false, ],
        'nb'        => [ 'tag' => 'span', 'class' => 'paragraphs',               'numbered'=>false, ],
        'pc'        => [ 'tag' => 'span', 'class' => 'paragraphs',               'numbered'=>false, ],
        'b'         => [ 'tag' => 'span', 'class' => 'paragraphs',               'numbered'=>false, ],
        'pi'        => [ 'tag' => 'span', 'class' => 'paragraphs',               'numbered'=>true, ],
        'ph'        => [ 'tag' => 'span', 'class' => 'paragraphs',               'numbered'=>true, ],
        'pb'        => [ 'tag' => 'span', 'class' => 'paragraphs',               'numbered'=>false, ], //Explicit page break.
        
        'qr'        => [ 'tag' => 'span', 'class' => 'poetry',                   'numbered'=>false, ],
        'qc'        => [ 'tag' => 'span', 'class' => 'poetry',                   'numbered'=>false, ],
        'qa'        => [ 'tag' => 'span', 'class' => 'poetry',                   'numbered'=>false, ],
        'qd'        => [ 'tag' => 'span', 'class' => 'poetry',                   'numbered'=>false, ],
        'q'         => [ 'tag' => 'span', 'class' => 'poetry',                   'numbered'=>true, ],
        'qm'        => [ 'tag' => 'span', 'class' => 'poetry',                   'numbered'=>true, ],
        
        'lh'        => [ 'tag' => 'span', 'class' => 'lists',                   'numbered'=>false, ],
        'lf'        => [ 'tag' => 'span', 'class' => 'lists',                   'numbered'=>false, ],
        'li'        => [ 'tag' => 'span', 'class' => 'lists',                   'numbered'=>true, ],
        'lim'       => [ 'tag' => 'span', 'class' => 'lists',                   'numbered'=>true, ],
        
        'tr'        => [ 'tag' => 'tr', 'class' => 'tables',                    'numbered'=>false, 'tag_table_container' => 'div', 'tag_table_container_css' => 'usfm usfm_tables', 'tag_table' => 'table', 'tag_table_css' => 'usfm usfm_tables tables', ], // example: Numeri 1,20-43, Nm 4,34-49
        
        'lit'        => [ 'tag' => 'span', 'class' => 'wordsandcharacters',     'numbered'=>false, ],
        
    ];
    
    /**
     * 
     * @param string $_text
     * @param string $pattern
     * @param string $replacement
     * @param string $pattern_closure
     * @param string $html_tag_close
     * @return string|null
     */
    protected static function fromUsfmToHtmlDoReplace( $_text, $pattern, $replacement, $pattern_closure, $html_tag_close ):?string {
        $return = $_text;
        if( !empty( $_text ) ):
            $row_temp = preg_replace( $pattern, $replacement, $_text);
            if( null !== $row_temp ):
                if( !empty( $pattern_closure ) && null !== $html_tag_close ):
                    $count = 0;
                    $row_temp_closed = preg_replace( $pattern_closure, $html_tag_close, $row_temp, 1, $count);
                    if( null !== $row_temp_closed && $count>0 ):
                        $row_temp = $row_temp_closed;
                    else:
                        $row_temp = "{$row_temp_closed}$html_tag_close";
                    endif;
                endif;
                $return = $row_temp;
            endif;
        endif;
        return $return;
    }
    
    protected static function fromUsfmAddMissingExplicitClosure( $_text ):?string {
        $return = $_text;
        if( !empty( $_text ) ):
            foreach( self::PAIR_MARKER_LIST as $marker => $marker_detail ):
                if( null !== $marker_detail['implicit_closure'] ):
                    $marker_pattern_value               = preg_quote( $marker );
                    switch ( $marker ):
                        case 'th':
                        case 'thr':
                        case 'tc':
                        case 'tcr':
                            $implicit_closure_subpattern_array  = [ "(?:\\\\{1}{$marker_pattern_value}[0-9]*(?:[-–]{1}[0-9]+)?\\*)", ]; // self closure
                            break;
                        default:
                            $implicit_closure_subpattern_array  = [ "(?:\\\\{1}{$marker_pattern_value}[0-9]*\\*)", ]; // self closure
                    endswitch;
                    
                    $implicit_closures                  = $marker_detail['implicit_closure'];
                    foreach( $implicit_closures as $implicit_closure  ):
                        $marker_implicit_pattern_value      = preg_quote( $implicit_closure );
                        switch ( $marker ):
                            case 'th':
                            case 'thr':
                            case 'tc':
                            case 'tcr':
                                $implicit_closure_subpattern_array[]= "(?=\\\\{1}{$marker_implicit_pattern_value}[0-9]*(?:[-–]{1}[0-9]+)?\\s)"; //start of new marker or closure of marker container
                                break;
                            default:
                                $implicit_closure_subpattern_array[]= "(?=\\\\{1}{$marker_implicit_pattern_value}[0-9]*\\s)"; //start of new marker or closure of marker container
                        endswitch;
                    endforeach;
                    $implicit_closure_subpattern_array[]= "(?=$)|(?=\\r)"; // end-line closure
                    $marker_end_pattern_value = implode( '|', $implicit_closure_subpattern_array );
                    
                    switch ( $marker ):
                        case 'th':
                        case 'thr':
                        case 'tc':
                        case 'tcr':
                            $pattern     = "/(?:\\\\{1})({$marker_pattern_value})([0-9]*(?:[-–]{1}[0-9]+)?)(?:\\s{1})(.*?)(?:{$marker_end_pattern_value})/m"; // $1 marker, $2 optional number ( # numbered markers ), $3 column range (for colspan computing), $4 _text...
                            $replacement = "\\\\\$1$2 $3\\\\\$1$2*";
                            break;
                        default :
                            $pattern     = "/(?:\\\\{1})({$marker_pattern_value})([0-9]*)(?:\\s{1})(.*?)(?:{$marker_end_pattern_value})/m"; // $1 marker, $2 optional number ( # numbered markers ), $3 _text...
                            $replacement = "\\\\\$1$2 $3\\\\\$1$2*";
                    endswitch;
                    
                    $replaced = preg_replace( $pattern, $replacement, $return );
                    if( null !== $replaced ):
                        $return = $replaced;
                    endif;
                endif;
            endforeach;
        endif;
        return $return;
    }
    
    protected static function fromUsfmToHtmlReplaceInnerTag( $_text ):?string {
        $return = $_text;
        if( !empty( $_text ) ):
            
            //$return = self::fromUsfmAddMissingExplicitClosure( $return );
        
            foreach( self::PAIR_MARKER_LIST as $marker => $marker_detail ):
                
                $tag_openers  = "";
                $tag_closures = "";
                $numbered_marker_bool    = $marker_detail[ 'numbered' ];
                $css_marker_cleaned      = '';
                if( 0 === mb_strpos( $marker, '+' ) ): //for markers like: +bk, +bd, etc
                    $css_marker_cleaned = str_replace( '+', '', $marker );
                    if( $numbered_marker_bool ):
                        $css_marker_cleaned = "{$css_marker_cleaned} {$css_marker_cleaned}$2 {$css_marker_cleaned}_plus {$css_marker_cleaned}_plus$2";
                    else:
                        $css_marker_cleaned = "{$css_marker_cleaned} {$css_marker_cleaned}_plus";
                    endif;
                elseif( 0 === mb_strpos( $marker, '-' ) ): //for markers like: -bk, -bd, etc
                    $css_marker_cleaned = str_replace( '-', '', $marker );
                    if( $numbered_marker_bool ):
                        $css_marker_cleaned = "{$css_marker_cleaned} {$css_marker_cleaned}$2 {$css_marker_cleaned}_minus {$css_marker_cleaned}_minus$2";
                    else:
                        $css_marker_cleaned = "{$css_marker_cleaned} {$css_marker_cleaned}_minus";
                    endif;
                else:
                    if( $numbered_marker_bool ):
                        $css_marker_cleaned = "{$marker} {$marker}$2";
                    else:
                        $css_marker_cleaned = "{$marker}";
                    endif;
                endif;
                $tag_class    = "usfm usfm_" . $marker_detail[ 'class' ] . " {$css_marker_cleaned}";
                if( !is_array( $marker_detail[ 'tag' ] ) ):
                    switch ( $marker ):
                        case 'th':
                        case 'thr':
                        case 'tc':
                        case 'tcr':
                            $tag_openers  = "<{$marker_detail[ 'tag' ]} compute_colspan=\"$2\" class=\"{$tag_class}\">";
                            break;
                        default :
                            $tag_openers  = "<{$marker_detail[ 'tag' ]} class=\"{$tag_class}\">";
                    endswitch;
                    $tag_closures = "</{$marker_detail[ 'tag' ]}>";
                else:
                    foreach( $marker_detail[ 'tag' ] as $tag ):
                        $tag_openers  .= "<{$tag} class=\"{$tag_class}\">";
                        $tag_closures = "</{$tag}>" . $tag_closures;
                    endforeach;
                endif;
            
                $marker_pattern_value = preg_quote( $marker );
                switch ( $marker ):
                    case 'th':
                    case 'thr':
                    case 'tc':
                    case 'tcr':
                        $pattern = "/(?:\\\\{1})({$marker_pattern_value})([0-9]*(?:[-–]{1}[0-9]+)?)(?:\\s{1})(.*?)(?:\\\\{1}{$marker_pattern_value}[0-9]*(?:[-–]{1}[0-9]+)?\\*)/m"; // $1 marker, $2 optional number ( # numbered markers ), $3 _text...
                        break;
                    default :
                        $pattern = "/(?:\\\\{1})({$marker_pattern_value})([0-9]*)(?:\\s{1})(.*?)(?:\\\\{1}{$marker_pattern_value}[0-9]*\\*)/m"; // $1 marker, $2 optional number ( # numbered markers ), $3 _text...
                endswitch;
                $replacement = "{$tag_openers}$3{$tag_closures}";
                
                $replaced = preg_replace( $pattern, $replacement, $return );
                if( null !== $replaced ):
                    switch ( $marker ):
                        case 'th':
                        case 'thr':
                        case 'tc':
                        case 'tcr':
                            $matches_colspan     = array();
                            $pattern_colspan     = "/\\bcompute_colspan\\b\\=[\"']{0,1}([-–0-9]+)[\"']{0,1}/m";
                            $pattern_colspan_return = preg_match_all( $pattern_colspan, $replaced, $matches_colspan );
                            if( 0 < $pattern_colspan_return && !empty( $matches_colspan ) ):
                                $replacement_colspan_patterns    = array();
                                $replacement_colspan_values      = array();
                                foreach( $matches_colspan[0] as $match_full_pattern_index => $match_full_pattern ):
                                    if( isset( $matches_colspan[1] ) && isset( $matches_colspan[1][ $match_full_pattern_index ] ) ):
                                        $colspan_range = $matches_colspan[1][ $match_full_pattern_index ];
                                        if( !empty( $colspan_range ) ):
                                            $colspan_range           = str_replace( '–', '-',$colspan_range );
                                            $colspan_range_splitted  = explode( '-', $colspan_range );
                                            $colspan_value           = 1;
                                            if( 2 === count( $colspan_range_splitted ) ):
                                                $colspan_value = intval( $colspan_range_splitted[1] ) - intval( $colspan_range_splitted[0] ) + 1;
                                            endif;
                                            $replacement_colspan_patterns[]  = '/' . preg_quote( $match_full_pattern ) . '/m';
                                            if( 2 <= $colspan_value ):
                                                $replacement_colspan_values[]    = "{$match_full_pattern} colspan=\"{$colspan_value}\"";
                                            else:
                                                $replacement_colspan_values[]    = "";
                                            endif;
                                        endif;
                                    endif;
                                endforeach;
                                if( 0 < count( $replacement_colspan_patterns ) ):
                                    $replaced_colspan_fixed = preg_replace( $replacement_colspan_patterns, $replacement_colspan_values, $replaced );
                                    if( null !== $replaced_colspan_fixed ):
                                        $replaced = $replaced_colspan_fixed;
                                    endif;
                                endif;
                            endif;
                            break;
                    endswitch;
                    $return = $replaced;
                endif;
                
            endforeach;
        endif;
        return $return;
    }
    
    
    /**
     * 
     * @param string $text
     * @param string $inject_place_holder_verse_number In case is not null not display verse's versenumber but put $inject_place_holder_verse_number value on output
     * @return string|null
     */
    public static function fromUsfmToHtml( $text, $inject_place_holder_verse_number = null ):?string {
        
        $return = null;
        
        if( !empty( $text ) ):
            
            //https://ubsicap.github.io/usfm/characters/index.html#spacing-and-breaks
            //Discretionary (optional) line break.
            $preliminary_pattern = '/\\s\\/\\/\\s/m';
            $preliminary_replace = '<br>';
            $text_temp = preg_replace( $preliminary_pattern, $preliminary_replace, $text );

            $text_list = preg_split( "/\\r\\n|\\n|\\r/", self::fromUsfmAddMissingExplicitClosure( $text_temp ) );
            $initial_marker_pattern = "/^(?:\\\\{1})([a-zA-Z]+)([0-9]*)(?:\\s{1}|$)(.*)/"; // $1 marker, $2 optinal number ( # numbered markers ), $3 _text...

            $text_list_temp = array();

            $table_to_close = false;
            foreach( $text_list as $key => $val ):
                $matches = array();
                $to_add = $val;

                if( 1 === preg_match( $initial_marker_pattern, $val, $matches ) ):
                    $nl_marker           = $matches[ 1 ];
                    $nl_marker_number    = $matches[ 2 ];
                    $nl_marker_text      = $matches[ 3 ];

                    if( !empty( $nl_marker ) && key_exists( $nl_marker, self::NL_MARKER_LIST ) ):

                        $marker_detail = self::NL_MARKER_LIST[ $nl_marker ];
                    
                        if( 'v' === $nl_marker ):
                            $verse_number_html = "<{$marker_detail[ "verse_number_tag" ]} class=\"{$marker_detail[ "verse_number_class" ]}\">$2</{$marker_detail[ "verse_number_tag" ]}>";
                            if( !empty( $inject_place_holder_verse_number ) ):
                                $verse_number_html = "{$inject_place_holder_verse_number}<!--<{$marker_detail[ "verse_number_tag" ]} class=\"{$marker_detail[ "verse_number_class" ]}\">$2</{$marker_detail[ "verse_number_tag" ]}>-->";
                            endif;
                            $pattern_vn = [
                                //"verse number"
                                '/(^\\\\v\\s)([0-9a-z-–]+)\\s{1}/',
                            ];
                            $replacement_vn = [
                                //"Numversetto. Testo", "Numversetto.Testo", "NumversettoTesto"
                                '$1' . $verse_number_html,
                            ];
                            $val = preg_replace( $pattern_vn, $replacement_vn, $val );
                        endif;

                        $tag_openers  = "";
                        $tag_closures = "";
                        $tag_class    = "usfm usfm_" . $marker_detail[ 'class' ] . " $1" . ( ( $nl_marker_number ) ? " $1$2" : "" );
                        if( !is_array( $marker_detail[ 'tag' ] ) ):
                            $tag_openers  = "<{$marker_detail[ 'tag' ]} class=\"{$tag_class}\">";
                            $tag_closures = "</{$marker_detail[ 'tag' ]}>";
                        else:
                            foreach( $marker_detail[ 'tag' ] as $tag ):
                                $tag_openers  .= "<{$tag} class=\"{$tag_class}\">";
                                $tag_closures = "</{$tag}>" . $tag_closures;
                            endforeach;
                        endif;

                        $replacement         = "{$tag_openers}$3{$tag_closures}";


                        $row_temp = self::fromUsfmToHtmlDoReplace( $val, $initial_marker_pattern, $replacement, null, $tag_closures );
                        if( null !== $row_temp ):
                            $to_add = $row_temp;
                        endif;
                    else:
                        $to_add = $val;
                    endif;
                endif;

                if( $table_to_close && ( 'tr' !== $nl_marker  || $key === array_key_last( $text_list ) ) ):
                    $marker_detail_tr = self::NL_MARKER_LIST[ 'tr' ];
                    $table_to_close = false;
                    if( 'tr' !== $nl_marker ):
                        $to_add = "</{$marker_detail_tr["tag_table"]}></{$marker_detail_tr["tag_table_container"]}>{$to_add}";
                    else:
                        $to_add = "$to_add</{$marker_detail_tr["tag_table"]}></{$marker_detail_tr["tag_table_container"]}>";
                    endif;
                elseif( !$table_to_close && 'tr' === $nl_marker ):
                    $marker_detail_tr = self::NL_MARKER_LIST[ 'tr' ];
                    $table_to_close = true;
                    $to_add = "<{$marker_detail_tr["tag_table_container"]} class=\"{$marker_detail_tr["tag_table_container_css"]}\"><{$marker_detail_tr["tag_table"]} class=\"{$marker_detail_tr["tag_table_css"]}\">{$to_add}";
                endif;

                $text_list_temp[ $key ] = $to_add;
            endforeach;

            $return = implode( PHP_EOL , $text_list_temp );

            $return = self::fromUsfmToHtmlReplaceInnerTag( $return );
            
        else:
            $return = $text;
        endif;

        return $return;
    }

}
