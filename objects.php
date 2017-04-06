<?php
	
	class pageContent {
		private $m_welcomeMsg;
		private $m_paragraphTop;
		private $m_paragraphBottom;
		private $m_arrSubtitle;
		private $m_arrTxt;
		private $m_arrSize;
		private $m_goToTop;
			
		public function getWelcomeMsg() { return $this->m_welcomeMsg; }
		public function getParagraphTop() { return $this->m_paragraphTop; }
		public function getParagraphBottom() { return $this->m_paragraphBottom; }
		public function getArrSubtitle() { return $this->m_arrSubtitle; }
		public function getArrTxt() { return $this->m_arrTxt; }
		public function getArrSize() { return $this->m_arrSize; }
		public function getGoToTop() { return $this->m_goToTop; }
		
		public function setWelcomeMsg($string) { $this->m_welcomeMsg = $string; }
		public function setParagraphTop($txt) { $this->m_paragraphTop = $txt; }
		public function setParagraphBottom($txt) { $this->m_paragraphBottom = $txt; }
		public function setArrSubtitle($arr) { $this->m_arrSubtitle = $arr; }
		public function setArrSize($size) {$this->m_arrSize = $size; }
		public function setArrTxt($arr) { $this->m_arrTxt = $arr; }
		public function setGoToTop($bool) { $this->m_goToTop = $bool; }
			
	}

	class sideBanner
	{
		private $m_img;
		private $m_link;
		private $m_target;
		
		public function getImg() { return $this->m_img; }
		public function getLink() { return $this->m_link; }
		public function getTarget() { return $this->m_target; }
		
		public function __construct($img, $link, $target)
		{
			$this->m_img = $img;
			$this->m_link = $link;
			$this->m_target = $target;
		}
	}
?>