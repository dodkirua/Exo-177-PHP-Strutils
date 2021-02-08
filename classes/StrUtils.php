<?php

class StrUtils {
    private string $str;

    /**
     * StrUtils constructor.
     * @param string $str
     */
    public function __construct(string $str)
    {
        $this->setStr($str);
    }

    /**
     *  return str
     * @return string
     */
    public function getStr(): string
    {
        return $this->str;
    }

    /**
     * set stt
     * @param string $str
     */
    public function setStr(string $str): void
    {
        $this->str = $str;
    }

    /**
     * apply bold
     * @param false $token
     * @return string
     */
    public function bold($token = false) : string{
        if ($token === false){
            return "<span style='font-weight: bold'>".$this->getStr()."</span>";
        }
        else{
            return 'font-weight: bold';
        }

    }

    /**
     * apply italic
     * @param false $token
     * @return string
     */
    public function italic($token = false) : string{
        if ($token === false){
            return "<span style='font-style: italic'>".$this->getStr()."</span>";
        }
        else{
            return 'font-style: italic';
        }
    }

    /**
     * apply underline
     * @param false $token
     * @return string
     */
    public function underline($token = false) : string{
        if ($token === false){
            return "<span style='text-decoration-line: underline'>".$this->getStr()."</span>";
        }
        else{
            return 'text-decoration-line: underline';
        }
    }

    /**
     * apply capitalize
     * @param false $token
     * @return string
     */
    public function capitalize($token = false) : string{
        if ($token === false){
            return "<span style='text-transform: capitalize'>".$this->getStr()."</span>";
        }
        else{
            return "text-transform: capitalize";
        }
    }

    /**
     * apply bold, italic and underline
     * @return string
     */
    public function uglify ()  : string{
        return "<span style='".$this->bold(true)." ;".$this->italic(true)." ;".$this->underline(true)."'>".$this->getStr()."</span>";
    }
}